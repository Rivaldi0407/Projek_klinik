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
                        {!! Form::model($dokter, ['route' => $route, 'method' => $method]) !!}
                    
                        <div class="form-group mt-1">
                            <label for="my-input">KODE DOKTER</label>
                            {!! Form::text('kode_dokter', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Kode Dokter di sini']) !!}
                            <span class="text-danger">{{ $errors->first('kode_dokter') }}</span>
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for="my-input">NAMA DOKTER</label>
                            {!! Form::text('nama_dokter', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Dokter di sini']) !!}
                            <span class="text-danger">{{ $errors->first('nama_dokter') }}</span>
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for="my-input">SPESIALIS</label>
                            {!! Form::select('spesialis_id', $list_sp, null, ['class' => 'form-control', 'placeholder' => 'Pilih Spesialis Dokter']) !!}
                            <span class="text-danger">{{ $errors->first('spesialis_id') }}</span>
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for="my-input">NOMOR HP</label>
                            {!! Form::text('nomor_hp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nomor HP Dokter di sini']) !!}
                            <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
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