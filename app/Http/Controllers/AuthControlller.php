<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthControlller extends Controller
{
    public function index() {
        return view('login');
    }
    public function indexadmin() {
        $murid = Murid::all();
        return view('admin.index', compact('murid'));
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('indexadmin')->with('message', 'Login berhasil!');
            } elseif ($user->role == 'siswa') {
                return redirect()->route('indexmurid')->with('message', 'Login berhasil!');
            } elseif ($user->role == 'petugas') {
                return redirect()->route('indexwali')->with('message', 'Login berhasil!');
            }
        }

        // Tampilkan pesan SweetAlert jika login gagal
        return redirect('/loginsemua')->withErrors(['message' => 'Email atau password tidak cocok!'])->withInput()->with('alert-type', 'error');
    }
public function signupsave(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ], [
            'password.min' => 'Password harus memiliki minimal 6 karakter !',
            'nis.required' => 'nis tidak boleh kosong !',
            'name.required' => 'name tidak boleh kosong !',
            'email.required' => 'email tidak boleh kosong !',
            'email.unique' => 'email telah digunakan !',
            'password.required' => 'password tidak boleh kosong !',
        ]);

        $data = $request->all();
        $data['role'] = 'siswa';
        $data['profil'] = 'user.png';
        $check = $this->create($data);
        // Tampilkan pesan SweetAlert jika register berhasil
        return redirect("/loginsemua")
        ->with('success', 'Anda berhasil melakukan register!')
        ->with('alert-type', 'success');

    }
    public function create(array $data)
    {
        return User::create([
            'nis' => $data['nis'],
            'name' => $data['name'],
            'profil' => $data['profil'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }
    public function register()
    {
        return view('register');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
            session()->forget('key');
        return redirect('loginsemua');
    }
}
