<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AddOfficerController extends Controller
{
    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'password.min' => 'Password harus memiliki minimal 6 karakter!',
            'name.required' => 'name tidak boleh kosong!',
            'email.required' => 'email tidak boleh kosong!',
            'email.unique' => 'email telah digunakan!',
            'password.required' => 'password tidak boleh kosong!',
        ]);

        $user = $this->daftar($request->all());

        return redirect()->back()
            ->with('success', 'Anda berhasil melakukan register!')
            ->with('alert-type', 'success');
    }

    public function daftar(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'petugas',
        ]);
    }

    public function register2()
    {
        return view('admin.addofficer');
    }
}
