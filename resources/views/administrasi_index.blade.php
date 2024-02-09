@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <a href="{{ route('administrasi.create') }}"class="btn btn-primary">tambah</a> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Kode Administrasi</th>
                            <th>Tanggal </th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                            
                        </thead>
                        <tbody>
                            @foreach ($administrasi as $item)
                                <tr>
                                    <td>{{ $item ->id }}</td>
                                    <td>{{ $item ->kode_administrasi }}</td>
                                    <td>{{ $item ->tanggal->format('d F y') }}</td>
                                    <td>{{ optional($item->pasien)->nama_pasien }}</td>
                                    <td>{{ optional($item->dokter)->nama_dokter }}</td>
                                    <td>Rp. {{ number_format($item ->biaya) }}</td>
                                    <td>
                                        <a href="{{ route('administrasi.edit', $item->id) }}"
                                            class="btn btn-primary">
                                            Edit
                                    </a>
                                    {!! Form::open([
                                        'route'=>['administrasi.destroy', $item->id],
                                        'method'=>'delete',
                                        'style'=>'display:inline',
                                        'onsubmit'=>'return confirm("yakin dex mau dihapus?")',
                                    ]) !!}
                                    {!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $administrasi->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection