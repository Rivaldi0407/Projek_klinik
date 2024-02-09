<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Dokter</title>
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
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Nomor Hp</th>
                            <th>CREATED AT</th>
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach ($dokter as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kode_dokter }}</td>
                                <td>{{ $item->nama_dokter }}</td>
                                <td>{{ $item->spesialis }}</td>
                                <td>{{ $item->nomor_hp }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
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
