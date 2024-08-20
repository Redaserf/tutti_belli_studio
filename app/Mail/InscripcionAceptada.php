<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InscripcionAceptada extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $inscripcion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $inscripcion)
    {
        $this->usuario = $usuario;
        $this->inscripcion = $inscripcion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.inscripcionaceptada')
        ->with([
            'usuario' => $this->usuario,
            'inscripcion' => $this->inscripcion,
            'cursoNombre' => $this->inscripcion->cursos->nombre,
            'fechaInicio' => $this->inscripcion->cursos->fechaInicio,
            'horaInicio' => $this->inscripcion->cursos->horaInicio,
        ]);
    }
}
