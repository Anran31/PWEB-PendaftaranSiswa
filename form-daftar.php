<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-white bg-dark">

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="p-3 bg-dark text-white mb-auto">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="./index.php" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="./form-daftar.php" class="nav-link px-2 text-secondary">Daftar</a></li>
                        <li><a href="./list-siswa.php" class="nav-link px-2 text-white">List Pendaftar</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main class="px-3 mx-auto" style="max-width:42em">
            <div class="container p-0 card shadow border-0 rounded" style="min-width: 40rem;">
                <div class="card-header bg-dark text-center">
                    <h3>Formulir Mahasiswa Baru</h3>
                </div>
                <form class="bg-dark text-white" action="proses-pendaftaran.php" method="POST">
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label class="form-label" for="nama">Nama: </label>
                            <input required class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
                        </p>
                    </div>
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label class="form-label" for="alamat">Alamat: </label>
                            <textarea required class="form-control" name="alamat"></textarea>
                        </p>
                    </div>
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label for="jenis_kelamin">Jenis Kelamin: </label>
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                        </p>
                    </div>
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label for="agama">Agama: </label>
                            <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Atheis</option>
                            </select>
                        </p>
                    </div>

                    <div class="form-group mt-3 mx-3 my-4">
                        <p>
                            <label class="form-label" for="sekolah_asal">Sekolah Asal: </label>
                            <input class="form-control" required type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
                        </p>
                    </div>

                    <div class="form-group mt-3 mx-3 my-4">
                        <input class="w-100 btn btn-primary" type="submit" value="Daftar" name="daftar" />
                    </div>

                </form>
            </div>
        </main>

        <footer class="mt-auto text-white-50 text-center">
            <p>powered by <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>