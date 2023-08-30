<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $guarded = ['id'];

    public function jenislaporan()
    {
        return $this->belongsTo(Jenislaporan::class);
    }
    public function madrasah()
    {
        return $this->belongsTo(Madrasah::class);
    }
    public function tahunajaran()
    {
        return $this->belongsTo(Tahunajaran::class);
    }
}
