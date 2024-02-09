<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
       /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['dokter']= \App\Models\Dokter::paginate(5);
        $data['judul']='Data-data Dokter';
        return view('dokter_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['dokter'] = new \App\Models\Dokter();
        $data['route'] = 'dokter.store';
        $data['method'] = 'post';
        $data['tombol'] = 'Simpan';
        $data['judul'] = 'Tambah Data';
        $data['list_sp'] = \App\Models\Spesialis::pluck('nama','id');
        
        return view('dokter_form', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validasiData = $request ->validate([
            'kode_dokter'=> 'required|unique:dokters,kode_dokter',
            'nama_dokter'=> 'required',
            'spesialis_id'=> 'required',
            'nomor_hp'=> 'required',
            
        ]);
        $dokter = new \App\Models\Dokter();
        $dokter->fill($validasiData);
        #$mahasiswa->nim = $request->nim;
        #$mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        ##$mahasiswa->nomor_hp = $request->nomor_hp;
        $dokter->save();
        
        #flash('Data Berhasil Disimpan')->success();
        flash('Data Berhasil Disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dokter'] = \App\Models\Dokter::findOrFail($id);
        $data['route'] = ['dokter.update',$id];
        $data['method'] = 'put';
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data Dokter';
        $data['list_sp'] = \App\Models\Spesialis::pluck('nama','id');
            
        return view('dokter_form',$data);    
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_dokter' => 'required|unique:dokters,kode_dokter,' . $id,
            'nama_dokter' => 'required',
            'spesialisid' => 'required',
            'nomor_hp' => 'required',
        ]);

        $dokter = \App\Models\Dokter::findOrFail($id);
        
        $dokter->update($validasiData); // Menggunakan metode update untuk menghindari penggunaan fill() dan save() secara terpisah.

        flash('Data berhasil diubah')->success();

        return redirect()->route('dokter.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = \App\Models\Dokter::findOrFail($id);
        $dokter->delete();
        flash('data berhasil dihapus');
        return back();
    }

    public function laporan()
    {
        $data['dokter']=\App\Models\Dokter::all();
        $data['judul']='Laporan data Dokter';
        return view('dokter_laporan',$data);
    }
}
