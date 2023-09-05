<?php

namespace App\Models;

use App\Models\Madrasah;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $guarded = ['id'];
    
    public function madrasah(){
        return $this->belongsTo(Madrasah::class);
    }
}
