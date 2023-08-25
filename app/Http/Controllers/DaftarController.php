<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Madrasah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        $results = DB::select('select * from madrasahs where id > :id', ['id' => 1]);
        return view('dashboard.daftar', [
            'madrasah' => $results
        ]);
    }

    public function daftar(Request $request)
    {
        $rules = ([
            'madrasah_id' => 'required|unique:users',
            'username' => 'required|unique:users|min:4',
            'akses_id' => 'required',
            'aktif' => 'required'
        ]);

        if ($request->password != $request->password1) {
            return redirect('/registration')->with('kesalahan', 'Password tidak sama!');
        }
        $rules['password'] = 'required|min:6';

        $validated = $request->validate($rules);
        // Enkripsi Password
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('/registration')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }
}
