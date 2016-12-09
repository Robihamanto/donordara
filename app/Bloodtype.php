<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodtype extends Model
{
    protected $table = 'bloodtype';

    protected $fillable = [
        'name','description'
    ];
}
