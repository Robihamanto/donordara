<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = "information";

    protected $fillable = [
        'user_id', 'title', 'content', 'update_at'
    ];

    public function Comment()
    {
        return $this->hasMany(Comment::class, 'information_id');
    }
}
