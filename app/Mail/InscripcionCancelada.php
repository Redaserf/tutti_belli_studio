<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Inscripcion;

class InscripcionCancelada extends Mailable
{
    use Queueable, SerializesModels;

    public $inscripcion;
    public $nombreCurso;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @param  string  $nombreCurso
     * @return void
     */
    public function __construct($inscripcion, $nombreCurso)
    {
        $this->inscripcion = $inscripcion;
        $this->nombreCurso = $nombreCurso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.inscripcionrechazada')
            ->subject('Cancelación de Inscripción')
            ->with([
                'nombreCurso' => $this->nombreCurso,
                ]);
        }
}
