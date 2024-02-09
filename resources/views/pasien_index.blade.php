@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah</a> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>KODE PASIEN</th>
                            <th>NAMA PASIEN</th>
                            <th>JENIS KELAMIN</th>
                            <th>STATUS</th>
                            <th>ALAMAT</th>
                            <th>Created</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($pasien as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kode_pasien }}</td>
                                    <td>{{ $item->nama_pasien }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('pasien.edit', $item->id) }}" class="btn btn-warning btn-sm mr-1">Edit</a>
                                        {!! Form::open([
                                            'route' => ['pasien.destroy', $item->id],
                                            'method' => 'delete',
                                            'style' => 'display:inline',
                                            'onsubmit' => 'return confirm("Yakin data mau dihapus?")',
                                        ]) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $pasien->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
