<?php

namespace App\Models;

use App\Models\Madrasah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sarpras extends Model
{
    protected $guarded = ['id'];

    public function madrasah(){
        return $this->belongsTo(Madrasah::class);
    }
}
