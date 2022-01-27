<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FizaPelanPerancanganPerolehan;

class PelanPerancangan extends Mailable
{
    use Queueable, SerializesModels;

    public $fizaPelanPerancanganPerolehan;
    
    public function __construct(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        $this->fizaPelanPerancanganPerolehan = $fizaPelanPerancanganPerolehan;
    }


    public function build()
    {
        return $this->view('email.pelanperancangan');
    }
}
