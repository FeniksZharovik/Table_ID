<?php
require_once 'config.php';

$id_kelas = $_GET['id'];
$query = "
    SELECT kelas.id_kelas, kelas.tingkat_kelas, kelas.kode_kelas, jurusan.nama_jurusan 
    FROM kelas 
    INNER JOIN jurusan ON kelas.id_jurusan = jurusan.id_jurusan
    WHERE kelas.id_kelas = '$id_kelas'
";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_array($result);

if ($data) {
    $profil = $data['tingkat_kelas'] . ' ' . $data['kode_kelas'] . ' ' . $data['nama_jurusan'];
} else {
    $profil = "Data tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Siswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Profil Siswa</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID Kelas: <?= htmlspecialchars($data['id_kelas']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($profil) ?></p>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>