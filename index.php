<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Umur</title>
</head>
<body>

<?php
// Mengecek apakah variabel umur sudah di-set
if (isset($_POST['umur'])) {
    $umur = $_POST['umur'];

    // Memeriksa apakah seseorang memiliki cukup umur (misalnya, 18 tahun)
    if ($umur >= 18) {
        echo "<h1>Selamat datang di situs ini!</h1>";
    } else {
        echo "<h1>Maaf, Anda belum cukup umur untuk masuk.</h1>";
    }
} else {
    // Menampilkan formulir jika umur belum di-set
    ?>
    <form method="post" action="">
        <label for="umur">Masukkan Umur Anda:</label>
        <input type="number" name="umur" required>
        <button type="submit">Verifikasi</button>
    </form>
    <?php
}
?>

</body>
</html>