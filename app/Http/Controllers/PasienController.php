<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
       /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pasien'] = \App\Models\Pasien::paginate(5);
        $data['judul'] = 'Data-data Pasien';
        return view('pasien_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pasien'] = new \App\Models\Pasien();
        $data['route'] = 'pasien.store';
        $data['method'] = 'post';
        $data['tombol'] = 'Simpan';
        $data['judul'] = 'Tambah Data';
        $data['list_sp'] = [
            'LAKI-LAKI' => 'LAKI-LAKI',
            'PEREMPUAN' => 'PEREMPUAN',
        ];

        return view('pasien_form', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validasiData = $request->validate([
            'kode_pasien' => 'required|unique:pasiens,kode_pasien',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'alamat' => 'required'
        ]);
        $pasien = new \App\Models\Pasien();
        $pasien->fill($validasiData);
        $pasien->save();

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
        $data['pasien'] = \App\Models\Pasien::findOrFail($id);
        $data['route'] = ['pasien.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data Pasien';
        $data['list_sp'] = [
            '' => 'Pilih Spesialis',
            'LAKI-LAKI' => 'LAKI-LAKI',
            'PEREMPUAN' => 'PEREMPUAN',
        ];

        return view('pasien_form', $data);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_pasien' => 'required|unique:pasiens,kode_pasien,' . $id,
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'alamat' => 'required',
        ]);

        $pasien = \App\Models\Pasien::findOrFail($id);

        $pasien->update($validasiData); // Menggunakan metode update untuk menghindari penggunaan fill() dan save() secara terpisah.

        flash('Data berhasil diubah')->success();

        return redirect()->route('pasien.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = \App\Models\Pasien::findOrFail($id);
        $pasien->delete();
        flash('data berhasil dihapus');
        return back();
    }

    public function laporan()
    {
        $data['pasien'] = \App\Models\Pasien::all();
        $data['judul'] = 'Laporan data Pasien';
        return view('pasien_laporan', $data);
    }
}
