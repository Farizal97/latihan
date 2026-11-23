<?php
// 1. Data Awal
$namaPembeli  = "Raka";
$metodeBayar  = "Tunai";
$hargaSatuan  = 75000;
$jumlahBeli   = 3;
$statusMember = false;

// 2. Aturan Perhitungan
$subtotal = $hargaSatuan * $jumlahBeli;
$ppn      = 0.11 * $subtotal;

if (($subtotal >= 200000 || $statusMember == true) && $metodeBayar != "Kredit") {
    $diskon      = 0.10 * $subtotal;
    $statusPromo = "Dapat Diskon 10%";
} else {
    $diskon      = 0;
    $statusPromo = "Tidak Dapat Diskon";
}

$totalBayar = ($subtotal - $diskon) + $ppn;

// 3. Output Struk Belanja
echo "<pre>";
echo "====================================<br>";
echo "STRUK PEMBAYARAN TOKO<br>";
echo "====================================<br>";
echo "Pembeli      : " . $namaPembeli . "<br>";
echo "Metode Bayar : " . $metodeBayar . "<br>";
echo "------------------------------------<br>";
echo "Harga Satuan : Rp " . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Beli  : " . $jumlahBeli . " pcs<br>";
echo "Subtotal     : Rp " . number_format($subtotal, 0, ',', '.') . "<br>";
echo "Status Promo : " . $statusPromo . "<br>";
echo "Diskon (10%) : -Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "PPN (11%)    : +Rp " . number_format($ppn, 0, ',', '.') . "<br>";
echo "------------------------------------<br>";
echo "TOTAL BAYAR  : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
echo "====================================<br>";
echo "</pre>";
?>
