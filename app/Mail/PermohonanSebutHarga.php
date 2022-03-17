<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FizaPembelianSebutTender;

class PermohonanSebutHarga extends Mailable
{
    use Queueable, SerializesModels;

    public $PembelianSebutTender;


    public function __construct(FizaPembelianSebutTender $PembelianSebutTender)
    {
        $this->PembelianSebutTender = $PembelianSebutTender;
    }


    public function build()
    {
        return $this->view('email.permohonansebutharga');
    }
}
