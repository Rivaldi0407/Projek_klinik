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
                    <a href="{{ route('dokter.create') }}"class="btn btn-primary">tambah</a> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Nomor Hp</th>
                            <th>Created</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($dokter as $item)
                                <tr>
                                    <td>{{ $item ->id }}</td>
                                    <td>{{ $item ->kode_dokter }}</td>
                                    <td>{{ $item ->nama_dokter }}</td>
                                    <td>{{ $item ->spesialis }}</td>
                                    <td>{{ $item ->nomor_hp }}</td>
                                    <td>{{ $item ->created_at }}</td>
                                    <td>
                                        <a href="{{ route('dokter.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm mr-1">
                                            Edit
                                    </a>
                                    {!! Form::open([
                                        'route'=>['dokter.destroy', $item->id],
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
                    {{ $dokter->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection