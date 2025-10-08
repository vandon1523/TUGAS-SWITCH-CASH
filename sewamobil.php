<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Persewaan Mobil</title>
</head>
<body>
    <h2>Program Persewaan Mobil</h2>

    <form method="post" action="">
        <label>Nama Penyewa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Pilih Jenis Mobil:</label><br>
        <select name="mobil" required>
            <option value="">-- Pilih Mobil --</option>
            <option value="Avanza">Avanza</option>
            <option value="Xenia">Xenia</option>
            <option value="Innova">Innova</option>
            <option value="Alphard">Alphard</option>
            <option value="Fortuner">Fortuner</option>
        </select><br><br>

        <label>Lama Sewa (hari):</label><br>
        <input type="number" name="hari" min="1" required><br><br>

        <input type="submit" name="submit" value="Hitung Total">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mobil = $_POST['mobil'];
        $hari = $_POST['hari'];

        // Inisialisasi biaya
        $biaya_sewa = 0;
        $asuransi = 0;

        // Gunakan struktur IF ELSE
        if ($mobil == "Avanza") {
            $biaya_sewa = 300000;
            $asuransi = 15000;
        } elseif ($mobil == "Xenia") {
            $biaya_sewa = 300000;
            $asuransi = 15000;
        } elseif ($mobil == "Innova") {
            $biaya_sewa = 500000;
            $asuransi = 25000;
        } elseif ($mobil == "Alphard") {
            $biaya_sewa = 750000;
            $asuransi = 30000;
        } elseif ($mobil == "Fortuner") {
            $biaya_sewa = 700000;
            $asuransi = 25000;
        } else {
            echo "<p>Jenis mobil tidak tersedia!</p>";
            exit;
        }

        // Hitung total
        $total = ($biaya_sewa * $hari) + $asuransi;

        // Tampilkan hasil
        echo "<h3>Rincian Biaya Sewa Mobil</h3>";
        echo "Nama Penyewa: <b>$nama</b><br>";
        echo "Jenis Mobil: <b>$mobil</b><br>";
        echo "Lama Sewa: <b>$hari hari</b><br><br>";

        echo "Biaya Sewa per Hari: Rp " . number_format($biaya_sewa, 0, ',', '.') . "<br>";
        echo "Biaya Asuransi: Rp " . number_format($asuransi, 0, ',', '.') . "<br>";
        echo "<hr>";
        echo "<b>Total Pembayaran: Rp " . number_format($total, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>
