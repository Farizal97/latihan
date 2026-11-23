<?php
session_start();
$input = isset($_SESSION['cicilan_input']) ? $_SESSION['cicilan_input'] : [];
$validInput = isset($input['harga_barang'], $input['tenor'], $input['bunga'])
    && is_numeric($input['harga_barang'])
    && is_numeric($input['tenor'])
    && is_numeric($input['bunga']);

if ($validInput) {
    $hargaBarang = (float) $input['harga_barang'];
    $tenor = (int) $input['tenor'];
    $persenBunga = (float) $input['bunga'];
    $validInput = $hargaBarang >= 0 && $tenor >= 1 && $tenor <= 120 && $persenBunga >= 0;
}

if ($validInput) {
    $jumlahCicilan = $hargaBarang / $tenor;
    $bungaPerBulan = $hargaBarang * ($persenBunga / 100);
    $totalCicilanPerBulan = $jumlahCicilan + $bungaPerBulan;
    $totalBayar = $totalCicilanPerBulan * $tenor;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Hitung Cicilan</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 30px auto; }
        table { border-collapse: collapse; width: 100%; margin-top: 16px; }
        th, td { border: 1px solid #777; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .total { text-align: right; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Hasil Perhitungan Cicilan</h2>
    <?php if (!$validInput) { ?>
        <p>Silakan masukkan data yang valid melalui form.</p>
    <?php } else { ?>
        <table>
            <thead>
                <tr>
                    <th>Cicilan</th>
                    <th>Jumlah Cicilan</th>
                    <th>Bunga</th>
                    <th>Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $tenor; $i++) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>Rp <?= number_format($jumlahCicilan, 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($bungaPerBulan, 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($totalCicilanPerBulan, 0, ',', '.') ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3" class="total">Total Bayar</td>
                    <td>Rp <?= number_format($totalBayar, 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>
    <p><a href="form_latihan.php">Kembali ke form</a></p>
</body>
</html>
