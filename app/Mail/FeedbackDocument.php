<?php

namespace App\Mail;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackDocument extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $layanan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $layanan)
    {
        $this->user = $user;
        $this->layanan = $layanan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $data = $this->layanan;
        $pdf = PDF::loadView('document', compact('user','data'));
        $pdf->setPaper('A4', 'portrait');
        $pdf->setOption('margin-top', 0);
        $pdf->setOption('margin-right', 0);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('margin-left', 0);
        return $this->subject('Data Telah Diterima')->markdown('client.email.message')->attachData($pdf->output(), 'doc.pdf');
    }
}
