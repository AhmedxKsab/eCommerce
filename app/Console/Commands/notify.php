<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email and notify';

    /**
     * Execute the console command.
     */
    //event email scheduler send email to all users 
    public function handle()
    {
        //
        // $user= User::select('email')->get();//get collections of emails from database
        //$emails = User::pluck('email')->toArray(); //get all emails and insert them in array with loop
        // passing data
        $data = ['title' => 'php Programming', 'body' => 'php'];
        $users = User::select('id', 'email')->get();
        foreach ($users as $user) {
            try {
                Mail::to($user->email)->send(new NotifyEmail($data));
                $this->info("sent: {$user->id} - {$user->email}");
            } catch (\Exception $e) {
                $this->error("failed: {$user->id} - " . $e->getMessage());
            }
            sleep(12);
        }
    }
}
