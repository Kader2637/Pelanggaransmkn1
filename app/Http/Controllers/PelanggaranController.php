<?php

namespace App\Http\Controllers;

use App\Models\jenis_pelanggaran;
use App\Models\pelanggaran;
use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::check()) {
        // return view('pelanggaran.index');
        // }
        // return redirect('/login');
        $siswa = siswa::all();
        $user = User::all();
        $pelanggaran = pelanggaran::all();
        $jenis_pelanggaran = jenis_pelanggaran::all();
        return view('pelanggaran.index', compact('pelanggaran','siswa', 'jenis_pelanggaran','user'));
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
     * @param  \App\Http\Requests\StorepelanggaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idplg' => 'required',
            'tgl' =>'required',
            'nis'=> 'required',
            'jenis_plg' => 'required',
            'name' =>'required'
        ]);
        pelanggaran::create([
            'idplg' => $request->idplg,
            'tgl' => $request->tgl,
            'nis' => $request->nis,
            'jenis_plg' => $request->jenis_plg,
            'name' => $request->name,
        ]);
        return redirect()->back()->with('succes', ['berhasil menambah data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepelanggaranRequest  $request
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggaran $pelanggaran)
    {
        $pelanggaran->update([
            'idplg' => $request->idplg,
            'tgl' => $request->tgl,
            'nis' => $request->nis,
            'jenis_plg' => $request->jenis_plg,
            'name' => $request->name
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggaran $pelanggaran)
    {
        $pelanggaran->delete();
        return redirect()->back();
    }
}
