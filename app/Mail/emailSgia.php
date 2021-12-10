<?php

namespace App\Mail;

use App\Reuniao;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\User;
use Illuminate\Support\Facades\DB;

class emailSgia extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    public function __construct($user)
    {
        $this->user = $user; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $this->subject('Marcação de Reunião IASD SS');
        $this->to($this->user->email, $this->user->name);
        return $this->view('mail.reuniaoMail', 
    ['user' => $this->user]);
    }
}
