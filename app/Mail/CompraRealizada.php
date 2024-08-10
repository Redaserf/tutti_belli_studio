<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Venta;

class CompraRealizada extends Mailable
{
    use Queueable, SerializesModels;

    public $ventaId;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Venta $venta)
    {
        // Usamos la relación "usuarios" en lugar de "usuario"
        $this->ventaId = $venta->id;
        $this->usuario = $venta->usuarios->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.precompra')
                    ->subject('Confirmación de tu compra')
                    ->with([
                        'ventaId' => $this->ventaId,
                        'usuario' => $this->usuario,
                    ]);
    }
}
