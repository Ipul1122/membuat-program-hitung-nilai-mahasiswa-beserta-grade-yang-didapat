<?php
// Ambil data dari form
$mahasiswaKe = $_POST['mahasiswaKe'];
$namaMahasiswa = $_POST['namaMahasiswa'];
$nilaiTugas = $_POST['nilaiTugas'];
$nilaiUTS = $_POST['nilaiUTS'];
$nilaiUAS = $_POST['nilaiUAS'];

// Hitung nilai murni
$nilaiMurniTugas = $nilaiUTS * 0.3;
$nilaiMurniUTS = $nilaiUTS * 0.2;
$nilaiMurniUAS = $nilaiUAS * 0.5;

// Hitung nilai akhir
$nilaiAkhir = $nilaiMurniTugas + $nilaiMurniUTS + $nilaiMurniUAS;

// Tentukan grade berdasarkan nilai akhir
if ($nilaiAkhir >= 80) {
    $grade = 'A';
} elseif ($nilaiAkhir >= 70) {
    $grade = 'B';
} elseif ($nilaiAkhir >= 60) {
    $grade = 'C';
} elseif ($nilaiAkhir >= 50) {
    $grade = 'D';
} else {
    $grade = 'E';
}

// Tampilkan hasil perhitungan di submit.php
echo "<h2>Hasil Penilaian</h2>";
echo "Mahasiswa ke: " . $mahasiswaKe . "<br>";
echo "Nama: " . $namaMahasiswa . "<br>";
echo "Nilai Tugas: " . $nilaiTugas . "<br>";
echo "Nilai UTS: " . $nilaiUTS . "<br>";
echo "Nilai UAS: " . $nilaiUAS . "<br>";
echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
echo "Grade: " . $grade . "<br>";

// Tambahkan mahasiswa ke berikutnya
$mahasiswaKe++;

// Tambahkan tombol untuk kembali ke index.php
echo '<br><a href="index.php?mahasiswaKe='.$mahasiswaKe.'">Kembali ke Formulir Mahasiswa</a>';
?>
