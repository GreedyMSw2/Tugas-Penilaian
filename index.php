<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
</head>
<body style="display: flex; flex-direction: column; align-items: center;">
    <?php 
        require "config/data.php";
        require "config/functions.php";
        include "Templates/Navbar.php";
        include "Templates/Header.php";
    ?>
    <table style="gap: 1rem; border: 1px black solid;">
    <tr style="border: 1px;">
        <th>Nama</th>
        <th>Nilai Tugas</th>
        <th>Nilai Ulangan</th>
        <th>Nilai Uas</th>
        <th>Rata-rata</th>
        <th>Status Kelulusan</th>
    </tr>
    <tr>
        <?php foreach ($siswa as $nama => $nilai): 
            $rata_rata_siswa = hitungRataRata($nilai);
            $status_siswa = cekKelulusan(hitungRataRata($nilai));    
        ?>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $nilai['nilai_tugas']; ?></td>
            <td><?= $nilai['nilai_ulangan']; ?></td>
            <td><?= $nilai['nilai_UAS']; ?></td>
            <td><?= $rata_rata_siswa; ?></td>
            <td><?= $status_siswa; ?></td>
        </tr>
        <?php endforeach; ?>
    </tr>
    </table>
    <?php include "Templates/Footer.php"?>
</body>
</html>