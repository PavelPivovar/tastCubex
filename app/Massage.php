<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $table = 'massage';
    protected $fillable = ['title', 'body', 'user_id', 'file'];

    public function massage()
    {
        return $this->belongsTo('App\User');
    }
}
