<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    //


	 protected $fillable = ['id', 'nome', 'sobrenome', 'email', 'senha'];
  
}
	