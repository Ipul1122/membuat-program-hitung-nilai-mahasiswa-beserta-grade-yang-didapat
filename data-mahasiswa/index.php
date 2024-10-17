<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Form Mahasiswa</h2>
    <?php
    // Ambil nilai mahasiswa ke dari URL, default 1 jika tidak ada
    $mahasiswaKe = isset($_GET['mahasiswaKe']) ? $_GET['mahasiswaKe'] : 1;
    ?>
    <form action="submit.php" method="POST">
        <label for="mahasiswaKe">Mahasiswa ke:</label><br>
        <input type="number" id="mahasiswaKe" name="mahasiswaKe" value="<?= $mahasiswaKe ?>" readonly><br><br>

        <label for="namaMahasiswa">Nama Mahasiswa:</label><br>
        <input type="text" id="namaMahasiswa" name="namaMahasiswa" oninput="removeNumbers()" required placeholder="Masukkan Nama Anda"><br><br>

        <label for="nilaiTugas">Nilai Tugas:</label><br>
        <input type="number" id="nilaiTugas" name="nilaiTugas" step="0.01" required placeholder="Masukkan Nilai Tugas "><br><br>

        <label for="nilaiUTS">Nilai UTS:</label><br>
        <input type="number" id="nilaiUTS" name="nilaiUTS" step="0.01" required placeholder="Masukkan Nilai UTS "><br><br>

        <label for="nilaiUAS">Nilai UAS:</label><br>
        <input type="number" id="nilaiUAS" name="nilaiUAS" step="0.01" required placeholder="Masukkan Nilai UAS "><br><br>

        <button type="submit">Submit</button>
    </form>

    <script>
        function removeNumbers() {
  let inputField = document.getElementById("namaMahasiswa");
  inputField.value = inputField.value.replace(/[0-9]/g, ''); // Menghapus angka dari input
}

    </script>
</body>
</html>
