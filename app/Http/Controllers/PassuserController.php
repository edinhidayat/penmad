<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassuserController extends Controller
{
    public function index(){
        return view('dashboard.passuser.ubahpassword',[
            'title' => 'SiPenmad | Ubah Password'
        ]);
    }

    public function ubah(Request $request){
        $current = $request->currentpassword;
        if (Hash::check($current, Auth::User()->password)){
            if($request->password1 != $request->password){
                return redirect('/dashboard/passuser')->with('beda', 'Ulangi input Password yang baru!');
            }

            $rules = ([
                'password' => 'required|min:6',
                'akses_id' => 'required',
                'aktif' => 'required' 
            ]);
            if ($request->username != Auth::user()->username) {
                $rules['username'] = 'required|unique:users|min:4';
            }
            if ($request->madrasah_id != Auth::user()->madrasah_id) {
                $rules['madrasah_id'] = 'required|unique:users';
            }

            $validated = $request->validate($rules);

            $validated['password'] = Hash::make($validated['password']);

            User::where('id', Auth::user()->id)
            ->update($validated);
            return redirect('/dashboard/passuser')->with('suksesubahpassword', 'Data Berhasil diUbah!');
        }
        return redirect('/dashboard/passuser')->with('salahpassword', 'Password awal Salah!');
    }
}
