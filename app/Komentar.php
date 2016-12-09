<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = "komentar";

    protected $fillable = [
        'id_informasi', 'id_user_donor', 'komentar', 'time'
    ];
}
