<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::check()) {
        // return view('siswa.index');
        // }
        // return redirect('/login');
        $kelas = kelas::all();
        $nis = User::all();
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa','kelas', 'nis'));
    }

    public function siswa()
    {
        $siswaa = User::where('role', 'siswa')->get();
        return view('siswa.siswa', compact('siswaa'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' =>'required',
            'kelas'=> 'required',
            'kelamin' => 'required',
            'notlp' =>'required'
        ]);
        siswa::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'kelas' => $request->kelas,
            'kelamin' => $request->kelamin,
            'notlp' => $request->notlp,
        ]);
        return redirect()->back()->with('succes', ['berhasil menambah data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesiswaRequest  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        $siswa->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'kelas' => $request->kelas,
            'kelamin' => $request->kelamin,
            'notlp' => $request->notlp
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect()->back();
    }
}
