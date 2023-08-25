<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    protected $guarded = ['id'];

    public function madrasah(){
        return $this->hasMany(Madrasah::class);
    }
}
