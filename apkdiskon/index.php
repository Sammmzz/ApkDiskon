<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>aplikasi hitung diskon</title>
</head>
<body>
    
    <h2>Aplikasi Penghitung Diskon</h2>
    <form action="php/hitungDiskon.php" method="POST">
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" required ><br>
      
        <label>Harga:</label>
        <input type="number" name="harga" required><br>
      
        <label>Diskon (%):</label>
        <input type="number" name="diskon" required ><br>
      
        <label>Jumlah:</label>
        <input type="number" name="jumlah" required><br>
      
        <button type="submit">Hitung</button>
        
      </form>
      <a href="riwayat.php">← Masuk ke database</a>
</body>
</html>