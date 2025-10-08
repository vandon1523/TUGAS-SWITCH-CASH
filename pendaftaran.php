<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Ulang SMK "Pasti Bisa"</title>
</head>
<body>
    <h2>Pendaftaran Ulang Siswa SMK "Pasti Bisa"</h2>
    <form method="post" action="">
        <label>Nama Siswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nomor Induk:</label><br>
        <input type="text" name="nis" required><br><br>

        <label>Kelas:</label><br>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="1">Kelas 1</option>
            <option value="2">Kelas 2</option>
            <option value="3">Kelas 3</option>
        </select><br><br>

        <input type="submit" name="submit" value="Hitung Biaya">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $kelas = $_POST['kelas'];

        // Inisialisasi variabel
        $uang_gedung = 0;
        $spp = 0;
        $seragam = 0;

        // Struktur CASE OF (switch)
        switch ($kelas) {
            case 1:
                $uang_gedung = 800000;
                $spp = 90000;
                $seragam = 125000;
                break;
            case 2:
                $uang_gedung = 500000;
                $spp = 75000;
                $seragam = 100000;
                break;
            case 3:
                $uang_gedung = 500000;
                $spp = 75000;
                $seragam = 100000;
                break;
            default:
                echo "<p>Kelas tidak valid!</p>";
                exit;
        }

        // Hitung total
        $total = $uang_gedung + $spp + $seragam;

        // Tampilkan hasil
        echo "<h3>Hasil Pembayaran</h3>";
        echo "Nama Siswa: <b>$nama</b><br>";
        echo "Nomor Induk: <b>$nis</b><br>";
        echo "Kelas: <b>$kelas</b><br><br>";

        echo "Uang Gedung: Rp " . number_format($uang_gedung, 0, ',', '.') . "<br>";
        echo "SPP Bulan Juli: Rp " . number_format($spp, 0, ',', '.') . "<br>";
        echo "Seragam: Rp " . number_format($seragam, 0, ',', '.') . "<br>";
        echo "<hr>";
        echo "<b>Total Pembayaran: Rp " . number_format($total, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>
