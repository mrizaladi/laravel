<!DOCTYPE html>
<html>

<head>
    <title>Laporan Cetak</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    {{-- <p>{{ $date }}</p>  --}}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Alamat</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>


</html>
