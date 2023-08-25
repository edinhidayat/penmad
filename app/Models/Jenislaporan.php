<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenislaporan extends Model
{
    protected $guarded = ['id'];

    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
}
