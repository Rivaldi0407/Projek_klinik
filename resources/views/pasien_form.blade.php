@extends('layouts.sbadmin2')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        {!! Form::model($pasien, ['route' => $route, 'method' => $method]) !!}
                    
                        <div class="form-group mt-1">
                            <label for="my-input">KODE PASIEN</label>
                            {!! Form::text('kode_pasien', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Kode Pasien di sini']) !!}
                            <span class="text-danger">{{ $errors->first('kode_pasien') }}</span>
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for= "my-input">NAMA PASIEN</label>
                            {!! Form::text('nama_pasien', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Pasien di sini']) !!}
                            <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for="my-input">JENIS KELAMIN</label>
                            {!! Form::select('jenis_kelamin', $list_sp, null, ['class' => 'form-control', 'placeholder' => 'Pilih jenis kelamin Pasien']) !!}
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for="my-input">STATUS</label>
                            {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Masukkan statusPasien di sini']) !!}
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="my-input">ALAMAT</label>
                            {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Masukkan alamat Pasien di sini']) !!}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                    
                        <br>
                    
                        <div class="form-group mt-2">
                            {!! Form::submit($tombol, ['class' => 'btn btn-primary']) !!}
                        </div>
                    
                        {!! Form::close() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
