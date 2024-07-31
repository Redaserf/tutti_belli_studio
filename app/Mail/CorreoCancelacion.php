<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Cita;

class CorreoCancelacion extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    public function __construct(Cita $cita)
    {
        $this->cita = $cita;
    }

    public function build()
    {
        return $this->view('email.cancelacion')
        ->with([
            'nombreUsuario' => $this->cita->usuario->name,
            'fechaCita' => $this->cita->fechaCita,
            'horaCita' => $this->cita->horaCita,
        ]);
    }
}
