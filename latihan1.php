<?php
    // deklarasi variabel
    $nama = "Andi";
    $umur = 20;
    $nilaiMatematika = 85.5;
    $nilaiBahasa = 90;

    // proses perhitungan
    $totalNilai = $nilaiMatematika + $nilaiBahasa;
    $rataRata = $totalNilai / 2;

    // menampilkan output ke layar
    echo "<h2>DATA MAHASISWA</h2>";
    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Umur: " . $umur . "</p>";
    echo "<p>Nilai Matematika: " . $nilaiMatematika . "</p>";
    echo "<p>Nilai Bahasa: " . $nilaiBahasa . "</p>";
    echo "<p>Total Nilai: " . $totalNilai . "</p>";
    echo "<p>Rata-Rata: " . $rataRata . "</p>";
?>