<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Cita;

class NotificarAdministrador extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cita $cita)
    {
        $this->cita = $cita;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.notificarAdministrador')
                    ->subject('Nueva cita creada')
                    ->with([
                        'fechaCita' => $this->cita->fechaCita,
                        'horaCita' => $this->cita->horaCita,
                        'usuario' => $this->cita->usuario->name,
                    ]);
    }
}