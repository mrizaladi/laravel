<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Costumer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card mt-5">
                    <h5 class="card-header">Edit Data Costumer</h5>
                    <div class="card-body">
                        <form action="{{ route('laporans.update', $edit->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input stype="text" class="form-control" id="inputNama" name="nama" value="{{ $edit->nama }}">
                                    <input type="hidden" class="form-control" id="inputNama" name="id" value="{{ $edit->id }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail" name="email" value="{{ $edit->email }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputTelp" class="col-sm-2 col-form-label">Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTelp" name="telp" value="{{ $edit->telp }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAlamat" name="alamat" value="{{ $edit->alamat }}">
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')">Edit</button>
                                <a type="" class="btn btn-primary" href="/laporans">Lihat Laporan</a>
                            </center>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
