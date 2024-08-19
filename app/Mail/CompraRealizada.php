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
    public $productos;
    public $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Venta $venta)
    {
        $this->ventaId = $venta->id;
        $this->usuario = $venta->usuarios->name;

        // Agrupar productos por productoId y contar las cantidades
        $this->productos = $venta->detalleProductos->groupBy('productoId')->map(function ($group) {
            return [
                'nombre' => $group->first()->nombre,
                'descripcion' => $group->first()->descripcion,
                'precio' => $group->first()->precio,
                'cantidad' => $group->count()
            ];
        });

        // Calcular el precio total
        $this->total = $this->productos->sum(function($producto) {
            return $producto['precio'] * $producto['cantidad'];
        });
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
                'productos' => $this->productos,
                'total' => $this->total, // Pasar el total a la vista
                ]);
        }
}
