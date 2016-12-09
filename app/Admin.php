<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table = "admin";

    protected $fillable = [
        'username','password', 'nama_lengkap', 'alamat_email', 'alamat_lengkap'
        ];


}
