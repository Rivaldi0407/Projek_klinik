<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Pasien</title>
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
                                <th>KODE PASIEN</th>
                                <th>NAMA PASIEN</th>
                                <th>JENIS KELAMIN</th>
                                <th>STATUS</th>
                                <th>ALAMAT</th>
                                <th>CREATED AT</th>
                            </tr> 
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
