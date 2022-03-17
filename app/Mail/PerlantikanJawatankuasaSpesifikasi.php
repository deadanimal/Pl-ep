<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FizaJawatankuasa;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaNotaMinta;

class PerlantikanJawatankuasaSpesifikasi extends Mailable
{
    use Queueable, SerializesModels;

    public $PembelianSebutTender;


    public function __construct(FizaPembelianSebutTender $PembelianSebutTender)
    {
        $this->PembelianSebutTender = $PembelianSebutTender;
    }

    public function build()
    {
        return $this->view('email.jawatankuasaspesifikasi');
    }
}
