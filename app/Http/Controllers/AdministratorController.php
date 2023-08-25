<?php

namespace App\Http\Controllers;

use App\Models\Madrasah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    public function index()
    {
        if(Auth::user()->akses_id == 1){
        $results = DB::select('select * from madrasahs where id > :id', ['id' => 1]);
        return view('dashboard.admin.index', [
            'title' => 'Dashboard | SiPenmad',
            'madrasah' => $results
        ]);
        }
    }
}
