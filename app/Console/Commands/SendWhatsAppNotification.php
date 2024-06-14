<?php

namespace App\Console\Commands;

use App\Models\ChildSchedule;
use DateTime;
<<<<<<< HEAD
use DateTimeZone;
=======
>>>>>>> 685b98893398611faa73093cefc748cbf9fbe821
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
<<<<<<< HEAD
        $childSchedules = ChildSchedule::with(['child', 'schedule'])->where('status', 'belum')->get();
=======
        $childSchedules = ChildSchedule::with(['child', 'schedule'])->get();
>>>>>>> 685b98893398611faa73093cefc748cbf9fbe821

        foreach ($childSchedules as $childSchedule) {
            $child = $childSchedule->child;
            $schedule = $childSchedule->schedule;

            // Hitung tanggal imunisasi berdasarkan schedule
            $immunizationDate = (new DateTime($child->date_of_birth))
                ->modify("+{$schedule->year} years")
<<<<<<< HEAD
                ->modify("+{$schedule->month} months")
                ->setTime(00, 00);

            $currentDateTime = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

            $notificationDate = $immunizationDate;
            $notificationDate->setTime(22, 18);

            // Tentukan tanggal notifikasi 3 hari sebelumnya
            $threeDaysBefore = (clone $notificationDate)->modify('-3 days');

            // dd($immunizationDate->format('Y-m-d H:i'), $currentDateTime->format('Y-m-d H:i'));

            // Kirim notifikasi jika tanggal notifikasi adalah hari ini
            if ($notificationDate->format('Y-m-d H:i') == $currentDateTime->format('Y-m-d H:i')) {
                $this->sendWhatsAppNotification($child, $immunizationDate);
            } elseif ($threeDaysBefore->format('Y-m-d H:i') == $currentDateTime->format('Y-m-d H:i')) {
                // Kirim notifikasi jika tanggal notifikasi 3 hari sebelum
                $this->sendWhatsAppNotificationThreeDaysBefore($child, $immunizationDate);
            }
            // // dd($immunizationDate->format('Y-m-d H:i'), $currentDateTime->format('Y-m-d'));
            // // Kirim notifikasi jika tanggal notifikasi adalah hari ini
            // if ($immunizationDate->format('Y-m-d H:i') == $currentDateTime->format('Y-m-d H:i')) {
            //     $this->sendWhatsAppNotification($child, $immunizationDate);
            // }
            // exit; // 
        }
    }
    private function sendWhatsAppNotification($child, $immunizationDate)
=======
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
>>>>>>> 685b98893398611faa73093cefc748cbf9fbe821
    {
        $decryptNoWa = Crypt::decryptString($child->parent->no_wa);
        $phoneNumber = $decryptNoWa; // Asumsikan ada kolom no_wa di tabel child
        // dd($phoneNumber);
<<<<<<< HEAD
        $message = "Reminder: Hari ini anak anda {$child->name}, memiliki jadwal imunisasi 😊.";

        // $notificationDate->setTime(01, 34, 00);
        // Mengonversi tanggal notifikasi menjadi UNIX timestamp
        // $scheduleTimestamp = $notificationDate->getTimestamp();
=======
        $message = "Reminder: Anak Anda, {$child->name}, memiliki jadwal imunisasi pada tanggal {$immunizationDate->format('Y-m-d')}(5 hari lagi)😊.";

        $notificationDate->setTime(01, 34, 00);
        // Mengonversi tanggal notifikasi menjadi UNIX timestamp
        $scheduleTimestamp = $notificationDate->getTimestamp();
>>>>>>> 685b98893398611faa73093cefc748cbf9fbe821
        // dd($notificationDate->format('Y-m-d H:i:s'));
        $data = [
            'target' => $phoneNumber,
            'message' => $message,
<<<<<<< HEAD
            // 'schedule' => $scheduleTimestamp,
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
    private function sendWhatsAppNotificationThreeDaysBefore($child, $immunizationDate)
    {
        $decryptNoWa = Crypt::decryptString($child->parent->no_wa);
        $phoneNumber = $decryptNoWa; // Asumsikan ada kolom no_wa di tabel child
        // dd($phoneNumber);
        $message = "Reminder: 3 Hari lagi anak anda {$child->name}, memiliki jadwal imunisasi 😊.";

        // $notificationDate->setTime(01, 34, 00);
        // Mengonversi tanggal notifikasi menjadi UNIX timestamp
        // $scheduleTimestamp = $notificationDate->getTimestamp();
        // dd($notificationDate->format('Y-m-d H:i:s'));
        $data = [
            'target' => $phoneNumber,
            'message' => $message,
            // 'schedule' => $scheduleTimestamp,
=======
            'schedule' => $scheduleTimestamp,
>>>>>>> 685b98893398611faa73093cefc748cbf9fbe821
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
