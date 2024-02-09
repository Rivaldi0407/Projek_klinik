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
                        {!! Form::open(['route' => $route, 'method' => $method]) !!}
                        <div class="form-group mt-1">
                            <label for="my-input">Kode Administrasi Medis</label>
                            {!! Form::text('kode_administrasi', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Kode Administrasi Medis di sini']) !!}
                            <span class="text-danger">{{ $errors->first('kode_administrasi') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="my-input">Tanggal</label>
                            {!! Form::date('tanggal', $administrasi->tanggal ?? now(), ['class' => 'form-control', 'type' => 'date']) !!}
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="my-input">Pasien</label>
                            {!! Form::select('pasien_id', $list_pasien, null, ['class' => 'form-control', 'placeholder' => 'Pilih Pasien']) !!}
                            <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="my-input">Dokter</label>
                            {!! Form::select('dokter_id', $list_dokter, null, ['class' => 'form-control', 'placeholder' => 'Pilih Dokter']) !!}
                            <span class="text-danger">{{ $errors->first('dokter_id') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="my-input">Biaya Administrasi</label>
                            {!! Form::number('biaya', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Biaya Administrasi di sini']) !!}
                            <span class="text-danger">{{ $errors->first('biaya') }}</span>
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
