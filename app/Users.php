<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'blood_type_id', 'username', 'password', 'fullname','pob', 'dob', 'phonenumber', 'address', 'weight',
        'disease_history', 'status', 'is_admin'
    ];

    protected $hidden = [
      'password', 'remember_token'
    ];

    public function golonganDarah() {
        return $this->hasOne(GolonganDarah::class);
    }

    public function bloodType()
    {
        return $this->belongsTo(Bloodtype::class, 'blood_type_id');
    }
}
