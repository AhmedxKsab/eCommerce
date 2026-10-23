<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
// task schedular lesson 31 
Schedule::command('user:expiration')->everyMinute();
Schedule::command('email:notify')->daily();
