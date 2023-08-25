<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Madrasah extends Model
{
    protected $guarded = ['id'];

    public function akreditasi()
    {
        return $this->hasMany(Akreditasi::class);
    }
    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
    public function sarpras()
    {
        return $this->hasMany(Sarpras::class);
    }
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
    public function tahunajaran()
    {
        return $this->hasMany(Tahunajaran::class);
    }
    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
    public function danabos()
    {
        return $this->belongsTo(Danabos::class);
    }
}
