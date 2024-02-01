<?php

namespace App\Http\Controllers;

use App\Models\jenis_pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JenisPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::check()) {
        // return view('jenis_pelanggaran.index');
        // }
        // return redirect('/login');
        $jenis_pelanggaran = jenis_pelanggaran::all();
        return view('jenispelanggaran.index', compact('jenis_pelanggaran'));
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
     * @param  \App\Http\Requests\Storejenis_pelanggaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_plg' =>'required',
            'poin'=> 'required'
        ]);
        jenis_pelanggaran::create([
            'jenis_plg' => $request->jenis_plg,
            'poin' => $request->poin,

        ]);
        return redirect()->back()->with('succes', ['berhasil menambah data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenis_pelanggaran  $jenis_pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(jenis_pelanggaran $jenis_pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenis_pelanggaran  $jenis_pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(jenis_pelanggaran $jenis_pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatejenis_pelanggaranRequest  $request
     * @param  \App\Models\jenis_pelanggaran  $jenis_pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenis_pelanggaran $jenis_pelanggaran, $id)
    {
        $jenis_pelanggaran = jenis_pelanggaran::findOrFail($id);
        $jenis_pelanggaran->update([
            'jenis_plg' => $request->jenis_plg,
            'poin' => $request->poin,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenis_pelanggaran  $jenis_pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenis_pelanggaran $jenis_pelanggaran, $id)
    {
        $jenis_pelanggaran = jenis_pelanggaran::findOrFail($id);
        $jenis_pelanggaran->delete();
        return redirect()->back();
    }
}
