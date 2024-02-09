<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data administrasi</title>
<!-- Script -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-md-12">
                    <center>
                        <h2>{{ $judul }}</h2>
                    </center>

                    <table class="table table-bordered">
                        <thead> 
                            <tr>
                                <th>ID</th>
                            <th>Kode Administrasi</th>
                            <th>Tanggal </th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>BIAYA</th>
                        </thead>
                        <tbody>
                            @foreach ($administrasi as $item)
                                <tr>
                                    <td>{{ $item ->id }}</td>
                                    <td>{{ $item ->kode_administrasi }}</td>
                                    <td>{{ $item ->tanggal }}</td>
                                    <td>{{ $item ->pasien_id }}</td>
                                    <td>{{ $item ->dokter_id}}</td>
                                    <td>{{ $item ->biaya }}</td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h5>Mengetahui</h5>
                    <br>
                    <br>
                    <br>
                    <h5>Admin</h5>
                </div>
        </div>
    </div>
</body>
</html>