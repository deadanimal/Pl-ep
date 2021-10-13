<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\fizaPelanPerancanganPerolehan;


class PerancanganPerolehan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan )
    {
        $this->fizaPelanPerancanganPerolehan = $fizaPelanPerancanganPerolehan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.pelanperancanganperolehan_1')->with([
            'pelanperancanganperolehan'=>$this->fizaPelanPerancanganPerolehan
            ]);
    }
}
