<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function  index(){
        return view('login'); 
    }

    public function registration(){ 
        return view('registrasi'); 
    }

    public function postLogin(Request $request) { 
        $request->validate([ 'nik' => 'required', 'namalengkap' => 'required', 'password' => 'required', ]); 
        $credentials = $request->only('nik', 'namalengkap', 'password'); if (Auth::attempt($credentials)) 
        { return redirect()->intended('dashboard') ->withSuccess('anda berhasi masuk'); } 
        return redirect("login")->withSuccess('oh tidak! kamu tidak punya hak akses'); 
    }

    public function postRegistration(Request $request) { 
        $request->validate([ 'nik' => 'required', 'namalengkap' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6', ]); $data = $request->all(); $check = $this->create($data); return redirect("dashboard")->withSuccess('hebat! kamu berhasil login'); 
    }

    public function dashboard() {
        if(Auth::check()){ return view('dashboard'); } return redirect("login")->withSuccess('oh tidak! kamu tidak ada akses'); 
    }

    public function create(array $data) {
        return User::create([ 'nik' => $data['nik'], 'namalengkap' => $data['namalengkap'], 'email' => $data['email'], 'password' => Hash::make($data['password']) ]); 
    }

    public function logout() { 
        Session::flush(); Auth::logout(); return Redirect('login'); 
    }
}
