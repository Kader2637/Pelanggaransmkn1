<?php

namespace App\Http\Controllers;

use App\Models\jenis_pelanggaran;
use App\Models\Murid;
use App\Models\pelanggaran;
use App\Models\siswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class MuridController extends Controller
{
    public function index(){
        if(Auth::check()){
            $murid = Murid::all();
            $admin = auth()->user();
            return view('murid.index',[
                'admin' => $admin
            ], compact('murid'));
        }
        return redirect('/loginsemua');
    }
    public function pelanggaranmurid() {
        if(Auth::check()){
            $pelanggaran = pelanggaran::all();
            $admin = auth()->user();
            return view('murid.pelanggaranmurid',[
                'admin' => $admin
            ], compact('pelanggaran'));
        }
        return redirect('/loginsemua');
    }
    public function jenispelanggarmurid() {
        if(Auth::check()){
            $murid = jenis_pelanggaran::all();
            $admin = auth()->user();
            return view('murid.jenispelanggar',[
                'admin' => $admin
            ], compact('murid'));
        }
        return redirect('/loginsemua');
    }


public function updateProfile(Request $request)
{
    $siswa = User::find(Auth::user()->id);

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $siswa->id,
        // 'fileInputA' => 'image|mimes:jpeg,jpg,png|max:2048',
        'fileInputA' => 'image|mimes:jpeg,jpg,png|max:2048',
    ], [
        'name.required' => 'Nama harus diisi.',
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Email harus berupa alamat email yang valid.',
        'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
        'fileInputA.image' => 'Profil harus berupa gambar (JPG, JPEG, PNG).',
        'fileInputA.mimes' => '',
        'fileInputA.max' => 'Ukuran gambar profil tidak boleh melebihi 2 MB.',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $upProfile = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ];

    if ($request->hasFile('fileInputA')) {
        $oldProfile = $siswa->profil;

        if ($oldProfile != 'user.jpg') {
            File::delete(public_path('img/' . $oldProfile));
        }

        $file = $request->file('fileInputA');
        $newFile = $file->hashName();
        $file->move(public_path('img/'), $newFile);
        $upProfile['profil'] = $newFile;
    }

    $siswa->update($upProfile);

    return redirect()->back()->with('success', 'Profil berhasil diperbarui');
}



}
