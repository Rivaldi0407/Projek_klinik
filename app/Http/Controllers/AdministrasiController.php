<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
       /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['administrasi'] = \App\Models\Administrasi::paginate(5);
        $data['judul'] = 'Data-data Administrasi';
        return view('administrasi_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['administrasi'] = new \App\Models\Administrasi();
        $data['route'] = 'administrasi.store';
        $data['method'] = 'post';
        $data['judul'] = 'Tambah Data Administrasi';
        $data['tombol'] = 'Simpan';
        $data['list_pasien'] = 
            \App\Models\Pasien::selectRaw("id,concat(kode_pasien,'_',nama_pasien) as tampil")
        ->pluck('tampil','id');

        $data['list_dokter'] =
        \App\Models\Dokter::selectRaw("id,concat(kode_dokter,'_',nama_dokter) as tampil")
        ->pluck('tampil','id');

        return view('administrasi_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validasiData = $request->validate([
            'kode_administrasi' => 'required|unique:administrasis,kode_administrasi',
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'tanggal' => 'required',
            'biaya' => 'required',

        ]);

        \App\Models\Administrasi::create($validasiData);
        flash('Data sudah Disimpan')->success();
        return back();

        $administrasi = new \App\Models\Administrasi();
        $administrasi->fill($validasiData);
        $administrasi->save();

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
        $data['administrasi'] = \App\Models\Administrasi::findOrFail($id);
        $data['route'] = ['administrasi.update', $id];
        $data['method'] = 'put';
        $data['judul'] = 'Edit Data Administrasi';
        $data['tombol'] = 'Update';
        $data['list_pasien'] = 
            \App\Models\Pasien::selectRaw("id,concat(kode_pasien,'_',nama_pasien) as tampil")
        ->pluck('tampil','id');

        $data['list_dokter'] =
        \App\Models\Dokter::selectRaw("id,concat(kode_dokter,'_',nama_dokter) as tampil")
        ->pluck('tampil','id');

        return view('administrasi_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_administrasi' => 'required|unique:administrasis,kode_administrasi,' . $id,
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'tanggal' => 'required',
            'biaya' => 'required',
        ]);

        $administrasi = \App\Models\Administrasi::findOrFail($id);

        $administrasi->update($validasiData);

        flash('Data berhasil diubah')->success();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrasi = \App\Models\Administrasi::findOrFail($id);
        $administrasi->delete();
        flash('data berhasil dihapus');
        return back();
    }

    public function laporan()
    {
        $data['administrasi'] = \App\Models\Administrasi::all();
        $data['judul'] = 'Laporan data Administrasi';
        return view('administrasi_laporan', $data);
    }
}
