<?php

include("config.php");

if (!isset($_GET['id'])) {
    // kalau tidak ada id di query string
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

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
                <form class="bg-dark text-white" action="proses-edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label class="form-label" for="nama">Nama: </label>
                            <input required class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
                        </p>
                    </div>
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label class="form-label" for="alamat">Alamat: </label>
                            <textarea required class="form-control" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                        </p>
                    </div>
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label for="jenis_kelamin">Jenis Kelamin: </label>
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($siswa['jenis_kelamin'] == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                        </p>
                    </div>
                    <div class="form-group mt-3 mx-3">
                        <p>
                            <label for="agama">Agama: </label>
                            <select name="agama">
                                <option <?php echo ($siswa['agama'] == 'Islam') ? "selected" : "" ?>>Islam</option>
                                <option <?php echo ($siswa['agama'] == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                <option <?php echo ($siswa['agama'] == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                <option <?php echo ($siswa['agama'] == 'Budha') ? "selected" : "" ?>>Budha</option>
                                <option <?php echo ($siswa['agama'] == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                            </select>
                        </p>
                    </div>

                    <div class="form-group mt-3 mx-3 my-4">
                        <p>
                            <label class="form-label" for="sekolah_asal">Sekolah Asal: </label>
                            <input class="form-control" required type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                        </p>
                    </div>

                    <div class="form-group mt-3 mx-3 my-4">
                        <input class="w-100 btn btn-primary" type="submit" value="Simpan" name="simpan" />
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