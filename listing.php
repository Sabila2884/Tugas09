<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrasi PHP dan HTML dengan Inputan Pengguna</title>
</head>
<body>
    <h1>Perhitungan Gaji</h1>
    <form method="post" action="">
        <label for="gaji">Masukkan Gaji:</label>
        <input type="number" id="gaji" name="gaji" required>
        <br><br>
        <label for="pajak">Masukkan Pajak (dalam desimal, misal 0.1 untuk 10%):</label>
        <input type="number" step="0.01" id="pajak" name="pajak" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gaji = $_POST['gaji'];
        $pajak = $_POST['pajak'];
        $thp = $gaji - ($gaji * $pajak);

        echo "<p>Gaji sebelum pajak = Rp. $gaji</p>";
        echo "<p>Gaji yang dibawa pulang = Rp. $thp</p>";
    }
    ?>



</body>
</html>
