<?php

namespace App\Models;

use App\Models\Madrasah;
use App\Models\Tahunajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    protected $guarded = ['id'];

    public function tahunajaran(){
        return $this->belongsTo(Tahunajaran::class);
    }
    public function madrasah(){
        return $this->belongsTo(Madrasah::class);
    }
}
