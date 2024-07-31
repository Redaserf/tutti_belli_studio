<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoEspera extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    public function __construct($cita)
    {
        $this->cita = $cita;
    }

    public function build()
    {
        return $this->view('email.espera')
                    ->with([
                        'fechaCita' => $this->cita->fechaCita,
                        'horaCita' => $this->cita->horaCita,
                    ]);
    }
}
