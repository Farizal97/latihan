<?php
 $harga = 50000;
 if($harga >= 30000) {
    $diskon = $harga - (0.10 * $harga);
    $bayar = $harga - $diskon;
    echo "harga awal: " . $harga . "<br>";
    echo "harga Diskon: " . $diskon . "<br>";
    echo "Harga Bayar: " . $bayar;
 } else {
    echo "harga awal: " . $harga . "<br>";
 }
?>