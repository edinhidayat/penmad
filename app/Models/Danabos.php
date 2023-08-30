<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danabos extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function madrasah(){
        return $this->belongsTo(Madrasah::class);
    }
}
