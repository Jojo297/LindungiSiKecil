<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\SendWhatsAppNotification;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $scheduler)
    {
<<<<<<< HEAD
        $scheduler->command('app:send-whats-app-notification')->cron('* * * * *');
=======
        $scheduler->command('app:send-whats-app-notification')->everySecond();
>>>>>>> 685b98893398611faa73093cefc748cbf9fbe821
        //  ->dailyAt('08:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
