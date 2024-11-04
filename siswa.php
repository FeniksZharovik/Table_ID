<?php
require_once 'config.php';

// Ambil data siswa untuk ditampilkan
$siswaResult = mysqli_query($connection, "
    SELECT siswa.id_siswa, siswa.nama, siswa.jenis_kelamin, 
           CONCAT(kelas.tingkat_kelas, ' ', jurusan.kode_jurusan, ' ', kelas.kode_kelas) AS kelas
    FROM siswa
    INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas
    INNER JOIN jurusan ON kelas.id_jurusan = jurusan.id_jurusan
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Siswa</h1>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($siswa = mysqli_fetch_array($siswaResult)) {
                            ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= htmlspecialchars($siswa['nama']) ?></td>
                                    <td><?= htmlspecialchars($siswa['kelas']) ?></td>
                                    <td><?= htmlspecialchars($siswa['jenis_kelamin']) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>