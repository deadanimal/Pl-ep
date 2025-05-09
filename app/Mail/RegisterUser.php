<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUser extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

        /**
     * Create a new message instance.
     *
     * @param  \App\Models\User $user
     * @return void
     */

    public function __construct(User $user)
    {
        $this->user = $user;
        // $this->user=Auth::user()->id;
    }


    public function build()
    {
        return $this->view('email.register-user'); 
       
    }
}
