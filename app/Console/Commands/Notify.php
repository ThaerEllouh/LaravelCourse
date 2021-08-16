<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Notify For All Users Every Days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$users = User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        $data = ['title' => 'Programing', 'body' => 'php'];
        foreach($emails as $email){

            //How To Send Email In Laravel

            Mail::To($email)->send(new NotifyEmail($data));

        }
    }
}
