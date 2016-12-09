<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';

    protected $fillable = [
      'information_id', 'user_id', 'comment'
    ];

    public function information()
    {
        return $this->belongsTo(Informasi::class, 'information_id');
    }

    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }

}
