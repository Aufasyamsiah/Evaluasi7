<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->TTL = $request->TTL;
        $mahasiswa->umur = $request->umur;
        $mahasiswa->alamat = $request->alamat;


        $request->validate([
            'nama' => 'required',
            'TTL' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa->save();
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        // return $buku;
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        
        $request->validate([
            'nama' => 'required',
            'TTL' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
        ]);



        Mahasiswa::where('id', $mahasiswa->id)
            ->update([
                    'nama' => $request->nama,
                    'TTL' => $request->TTL,
                    'umur' => $request->umur,
                    'alamat' => $request->alamat
            ]);
            return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}

