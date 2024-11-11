<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nama_lengkap', 'kampus', 'tanggal_lahir', 'alamat_domisili', 'nomor_whatsapp', 'berketurunan_selayar'
    ];
}
