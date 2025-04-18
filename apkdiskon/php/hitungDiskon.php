<?php
include "koneksi.php";

// 1. Ambil data dari form
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$diskon = $_POST["diskon"];
$jumlah = $_POST["jumlah"];

// Validasi Apakah Diskon TIDAK < 0 Atau Diskon TIDAK >90%
if ($diskon < 0 || $diskon > 99) {
    echo "<script>alert('❌ Diskon tidak boleh lebih dari 100%'); window.history.back();</script>";
    exit;
}

// 2. Hitung total dan diskon
$total = $harga * $jumlah;     
$potongan = $total * ($diskon / 100);
$akhir = $total - $potongan;


// 3. Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 4. Simpan ke database
$sql = "INSERT INTO transaksi (nama_barang, harga, jumlah, diskon, total, potongan, total_bayar, waktu)
        VALUES ('$nama_barang', $harga, $jumlah, $diskon, $total, $potongan, $akhir, NOW())";


if ($conn->query($sql) === TRUE) {
    echo "<h3>Data berhasil disimpan ke database!</h3>";
} else {
    echo "Gagal menyimpan data: " . $conn->error;
    
}

$conn->close();
?>

<!-- 5. Tampilkan hasilnya -->
<table border="1" cellpadding="10">
  <tr><th>Nama Barang</th><td><?= htmlspecialchars($nama_barang) ?></td></tr>
  <tr><th>Harga Satuan</th><td>Rp <?= number_format($harga, 0, ',', '.') ?></td></tr>
  <tr><th>Jumlah</th><td><?= $jumlah ?></td></tr>
  <tr><th>Diskon</th><td><?= $diskon ?>%</td></tr>
  <tr><th>Total Harga</th><td>Rp <?= number_format($total, 0, ',', '.') ?></td></tr>
  <tr><th>Potongan</th><td>Rp <?= number_format($potongan, 0, ',', '.') ?></td></tr>
  <tr><th>Total Bayar</th><td><strong>Rp <?= number_format($akhir, 0, ',', '.') ?></strong></td></tr>
</table>
<button></button>
