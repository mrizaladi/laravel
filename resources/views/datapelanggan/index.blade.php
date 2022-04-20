<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card mt-5">
                    <h5 class="card-header">Data Costumer</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Pelanggan</th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggan as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->kode_pelanggan }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->telp }}</td>
                                        <td>{{ $value->alamat }}</td>
                                        <td>
                                            {{-- <a class="btn btn-info" href="">EDIT</a>
                                            <a class="btn btn-danger" href="">DEL</a> --}}

                                            <form action="{{ route('laporans.destroy', $value->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('laporans.edit', $value->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    {{-- <a href="cetak/{{ $pelanggan->uuid }}"
                                                        class="btn btn-info btn-sm">Cetak</a> --}}
                                                </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <center>
                            <a type="" class="btn btn-primary" href="laporans/create">Tambah Data</a>
                            <a type="" class="btn btn-primary" href="generate-pdf">Download Laporan</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
