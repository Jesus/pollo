<?php

namespace pollo;

use pollo\User;
use pollo\Product;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['id', 'cantidad', 'description', 'status', 'total', 'user_id'];

    public function propietario()
    {
    	return $this->belongsTo(User::class);
    }

    public function productos(){
        return $this->hasMany(Product::class);
    }
}
