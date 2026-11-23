<?php
// Data siswa
$namaSiswa	= "Dina";
$nilaiRapor	= 82;
$jumlahAlpa	= 2;
$juaraKelas	= false;
$rekomendasiGuru = true;
$sedangDiskors = false;

// Header Laporan
echo "============================================<br>";
echo "         LAPORAN EVALUASI SISWA <br>";
echo "============================================<br>";
echo "Nama Siswa  : $namaSiswa<br>";
echo "Nilai Rapor : $nilaiRapor<br>";
echo "Jumlah Alpa : $jumlahAlpa hari<br>";
echo "--------------------------------------------<br>";

// 1. Operator AND (&&) — Syarat Naik Kelas
echo "1. Kenaikan Kelas : ";
if ($nilaiRapor >= 75 && $jumlahAlpa <= 3) {
    echo "NAIK KELAS<br>";
} else {
    echo "TINGGAL KELAS<br>";
}
// 2. Operator OR (||) — Syarat Mengikuti Lomba
echo "2. Peserta Lomba  : ";
if ($juaraKelas === true || $rekomendasiGuru === true) {
    echo "BOLEH IKUT LOMBA<br>";
} else {
    echo "Tidak Memenuhi Syarat<br>";
}
// 3. Operator NOT (!) — Boleh Mengikuti Ujian
echo "3. Ujian Akhir    : ";
if (!$sedangDiskors) {
    echo "BOLEH IKUT UJIAN<br>";
} else {
    echo "Dilarang Ikut Ujian (Skors)<br>";
}
echo "============================================\n";
?>