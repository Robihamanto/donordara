<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    protected $table = "blood_stock";

    protected $fillable = [
        'user_id', 'total', 'status'
    ];

    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function bloodType(){
        return $this->belongsTo(Bloodtype::class, '');
    }
}
