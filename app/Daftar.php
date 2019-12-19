<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';
    protected $fillable = ['nama', 'email', 'no_telepon', 'password'];
}
