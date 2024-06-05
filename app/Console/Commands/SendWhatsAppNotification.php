<?php

namespace App\Console\Commands;

use App\Models\ChildSchedule;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class SendWhatsAppNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-whats-app-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $childSchedules = ChildSchedule::with(['child', 'schedule'])->get();

        foreach ($childSchedules as $childSchedule) {
            $child = $childSchedule->child;
            $schedule = $childSchedule->schedule;

            // Hitung tanggal imunisasi berdasarkan schedule
            $immunizationDate = (new DateTime($child->date_of_birth))
                ->modify("+{$schedule->year} years")
                ->modify("+{$schedule->month} months");

            // Hitung tanggal notifikasi (5 hari sebelum tanggal imunisasi)
            $notificationDate = (clone $immunizationDate)->modify('-5 days');

            if ($notificationDate->format('Y-m-d') === date('Y-m-d')) {
                $this->sendWhatsAppNotification($child, $immunizationDate, $notificationDate);
            }
            sleep(1); // Add this line
            exit; // 
        }
    }
    private function sendWhatsAppNotification($child, $immunizationDate, $notificationDate)
    {
        $decryptNoWa = Crypt::decryptString($child->parent->no_wa);
        $phoneNumber = $decryptNoWa; // Asumsikan ada kolom no_wa di tabel child
        // dd($phoneNumber);
        $message = "Reminder: Anak Anda, {$child->name}, memiliki jadwal imunisasi pada tanggal {$immunizationDate->format('Y-m-d')}(5 hari lagi)😊.";

        $notificationDate->setTime(01, 34, 00);
        // Mengonversi tanggal notifikasi menjadi UNIX timestamp
        $scheduleTimestamp = $notificationDate->getTimestamp();
        // dd($notificationDate->format('Y-m-d H:i:s'));
        $data = [
            'target' => $phoneNumber,
            'message' => $message,
            'schedule' => $scheduleTimestamp,
            'countryCode' => '62', // Optional
        ];
        $response = Http::withHeaders([
            'Authorization' => env('FONNTE_API_TOKEN'), // Ambil token dari environment
        ])->post('https://api.fonnte.com/send', $data);

        if ($response->successful()) {
            return "Notifikasi terkirim: " . $response->body();
        } else {
            return "Gagal mengirim notifikasi: " . $response->body();
        }
    }
}
