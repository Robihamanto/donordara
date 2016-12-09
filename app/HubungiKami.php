<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HubungiKami extends Model
{
    protected $table = "hubungi_kami";

    protected $fillable = [
        'nama_lengkap', 'alamat_email', 'isi_pesan', 'tanggal_pesan'
    ];
}
