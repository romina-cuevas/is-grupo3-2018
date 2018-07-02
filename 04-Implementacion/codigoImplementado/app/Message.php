<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message',
    ];//indica los campos que guarda en la base de datos
}
