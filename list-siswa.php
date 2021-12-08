<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-white bg-dark">

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="p-3 bg-dark text-white mb-auto">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="./index.php" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="./form-daftar.php" class="nav-link px-2 text-white">Daftar</a></li>
                        <li><a href="./list-siswa.php" class="nav-link px-2 text-secondary">List Pendaftar</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main class="py-3 px-5">
            <h1>List Pendaftar</h1>
            <p class="lead">
                <a href="./form-daftar.php" class="btn btn-sm btn-secondary fw-bold border-white bg-white text-dark">Tambah Baru</a>
            </p>
            <table class="table mt-4 bg-white">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM calon_siswa"; // query to get all data 
                    $query = mysqli_query($db, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $siswa['id'] . "</td>";
                        echo "<td>" . $siswa['nama'] . "</td>";
                        echo "<td style='width: 20%'>" . $siswa['alamat'] . "</td>";
                        echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                        echo "<td>" . $siswa['agama'] . "</td>";
                        echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                        echo "<td>";
                        echo "<a class='btn btn-dark mx-1' href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>";
                        echo "<a class='btn btn-danger' href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>

            <h5>Total: <?php echo mysqli_num_rows($query) ?></h5>
        </main>

        <footer class="mt-auto text-white-50 text-center">
            <p>powered by <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>