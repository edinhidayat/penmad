<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Isset_;

class LoginController extends Controller
{
    public function index(){
        return view('dashboard.login');
    }

    public function login(Request $request){
        $pengguna = User::where('username', $request->username)->get();
        
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if(isset($pengguna[0]['username'])){
            if($pengguna[0]['aktif'] != 1){
                return redirect('/login')->with('notregister','User Belum Aktif');
            }
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('gagal', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('keluar', 'Anda berhasil Logout');
    }
}
