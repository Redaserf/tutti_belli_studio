<?php

namespace App\Mail;

use App\Models\Cita;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoConfirmacion extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    public function __construct(Cita $cita)
    {
        $this->cita = $cita;
    }

    public function build()
    {
        return $this->view('email.confirmacion')
                    ->with([
                        'nombreUsuario' => $this->cita->usuario->name,
                        'fechaCita' => $this->cita->fechaCita,
                        'horaCita' => $this->cita->horaCita,
                    ]);
    }
}
