<?php

namespace pollo;

use pollo\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $table = 'comments';

    protected $fillable = ['id', 'calification', 'description', 'user_id'];

    public function propietario()
    {
    	return $this->belongsTo(User::class);
    }
}
