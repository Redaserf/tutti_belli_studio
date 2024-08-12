<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Curso;
use App\Models\DiaCurso;

class NuevaFecha extends Mailable
{
    use Queueable, SerializesModels;

    public $curso;
    public $nuevoDia;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($curso, $nuevoDia)
    {
        $this->curso = $curso;
        $this->nuevoDia = $nuevoDia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.nuevaFecha')
            ->with([
                'curso' => $this->curso,
                'nuevoDia' => $this->nuevoDia,
            ]);
    }
}
