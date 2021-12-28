<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FizaPembekal;
use Illuminate\Support\Facades\Mail;

class PermohonanAkaunPembekal extends Mailable
{
    use Queueable, SerializesModels;

    public $pembekal;


    public function __construct(FizaPembekal $pembekal )
    {
        $this->pembekal = $pembekal;
    }


    public function build()
    {
        return $this->view('email.permohonanakaunpembekal');
    }
}
