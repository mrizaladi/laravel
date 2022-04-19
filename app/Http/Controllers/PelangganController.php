<?php

namespace App\Http\Controllers;

use App\Models\PelangganModel;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['pelanggan']= PelangganModel::get();
        return view('datapelanggan.index', $data);
        // return redirect()->route('laporans.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all(); // Untuk mengetest data yang diminta
        $plg = PelangganModel::create([
            // 'kode_pelanggan'=>,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'telp'=>$request->telp,
            'alamat'=>$request->alamat
        ]);
        $kodepelanggan ='PLG000'.$plg['id'];
        PelangganModel::where('id',$plg['id'])->update([
            'kode_pelanggan'=> $kodepelanggan
        ]);
        // return view('laporan');
        return redirect()->route('laporans.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PelangganModel::where('id',$id)->first();
        return view('datapelanggan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plg = PelangganModel::where('id',$id)->update([
            // 'kode_pelanggan'=>,
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('laporans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PelangganModel::where('id', $id)->delete();
        return redirect()->route('laporans.index')->with('succes', 'Pelanggan Berhasil di Hapus');
        // return redirect()->route('laporans.index');

        // return $id;

    }
}
