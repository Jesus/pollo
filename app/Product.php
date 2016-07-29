<?php

namespace pollo;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['id', 'name', 'description', 'precio', 'pedido_id'];

    public function pedidos()
    {
    	return $this->belongsTo(Pedido::class);
    }
}
