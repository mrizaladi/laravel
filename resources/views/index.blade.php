<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Costumer</title>
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
                        <form action="/simpan" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input stype="text" class="form-control" id="inputNama" name="nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail" name="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputTelp" class="col-sm-2 col-form-label">Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTelp" name="telp">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAlamat" name="alamat">
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
