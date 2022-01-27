<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FizaPelanPerancanganPerolehan;
use Illuminate\Support\Facades\Auth;
class SemakanPelanPerancangan extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        $this->pelanperancanganperolehan = $pelanperancanganperolehan;
    }

    public function build()
    {
        return $this->view('email.semakansemulapelan');
    }
}
