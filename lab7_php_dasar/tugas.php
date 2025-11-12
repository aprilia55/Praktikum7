<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Dasar - Aprillia Putri</title>
</head>
<body>
    <h2>Form Input Data Diri</h2>
    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan:</label><br>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir)->y;

        switch ($pekerjaan) {
            case "Mahasiswa": $gaji = 0; break;
            case "Guru": $gaji = 5000000; break;
            case "Karyawan": $gaji = 6000000; break;
            case "Programmer": $gaji = 8000000; break;
            case "Desainer": $gaji = 7000000; break;
            default: $gaji = 0;
        }

        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: $tgl_lahir<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
