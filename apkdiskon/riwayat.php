<?php
// Koneksi ke database
include "php/koneksi.php";

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data transaksi
$sql = "SELECT * FROM transaksi ORDER BY waktu DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/riwayat.css">
  <title>Riwayat Transaksi</title>
  
</head>
<body>

  <h2>Riwayat Transaksi Diskon</h2>
<!-- mengecek query apakah menghasikan data atau ngga -->
  <?php 
  if ($result->num_rows > 0): ?>
  <!-- bikin table -->
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Diskon (%)</th>
          <th>Total</th>
          <th>Potongan</th>
          <th>Total Bayar</th>
          <th>Waktu</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($row['nama_barang']) ?></td>
          <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
          <td><?= $row['jumlah'] ?></td>
          <td><?= $row['diskon'] ?>%</td>
          <td>Rp <?= number_format($row['total'], 0, ',', '.') ?></td>
          <td>Rp <?= number_format($row['potongan'], 0, ',', '.') ?></td>
          <td><strong>Rp <?= number_format($row['total_bayar'], 0, ',', '.') ?></strong></td>
          <td><?= date("d-m-Y H:i", strtotime($row['waktu'])) ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p class="no-data">Belum ada transaksi.</p>
  <?php endif; ?>

  <a href="index.php">← Kembali ke Form</a>

</body>
</html>

<?php $conn->close(); 
?>
