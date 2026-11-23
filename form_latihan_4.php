<?php
session_start();

$input = isset($_SESSION['cicilan_input']) ? $_SESSION['cicilan_input'] : [
    'harga_barang' => '600000',
    'tenor' => '6',
    'bunga' => '2',
];
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hargaBarang = isset($_POST['harga_barang']) && is_scalar($_POST['harga_barang'])
        ? trim((string) $_POST['harga_barang'])
        : '';
    $tenor = isset($_POST['tenor']) && is_scalar($_POST['tenor'])
        ? trim((string) $_POST['tenor'])
        : '';
    $bunga = isset($_POST['bunga']) && is_scalar($_POST['bunga'])
        ? trim((string) $_POST['bunga'])
        : '';

    if (is_numeric($hargaBarang) && is_numeric($tenor) && is_numeric($bunga)
        && (float) $hargaBarang >= 0 && (int) $tenor >= 1 && (int) $tenor <= 120
        && (float) $bunga >= 0) {
        $input = [
            'harga_barang' => $hargaBarang,
            'tenor' => $tenor,
            'bunga' => $bunga,
        ];
        $_SESSION['cicilan_input'] = $input;

        if (isset($_POST['aksi']) && $_POST['aksi'] === 'hitung') {
            header('Location: latihan_4_output.php');
            exit;
        }

        $pesan = 'Data berhasil disimpan.';
    } else {
        $input = [
            'harga_barang' => $hargaBarang,
            'tenor' => $tenor,
            'bunga' => $bunga,
        ];
        $pesan = 'Masukkan data yang valid.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Hitung Cicilan</title>
</head>
<body>
    <h2>Hitung Cicilan Barang</h2>
    <?php if ($pesan !== '') { ?>
        <p><?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?></p>
    <?php } ?>
    <form action="" method="post">
        <p>
            <label>Harga Barang:
                <input type="number" name="harga_barang" min="0" step="1000" value="<?= htmlspecialchars($input['harga_barang'], ENT_QUOTES, 'UTF-8') ?>" required>
            </label>
        </p>
        <p>
            <label>Tenor (bulan):
                <input type="number" name="tenor" min="1" max="120" value="<?= htmlspecialchars($input['tenor'], ENT_QUOTES, 'UTF-8') ?>" required>
            </label>
        </p>
        <p>
            <label>Bunga (%):
                <input type="number" name="bunga" min="0" step="0.01" value="<?= htmlspecialchars($input['bunga'], ENT_QUOTES, 'UTF-8') ?>" required>
            </label>
        </p>
        <button type="submit" name="aksi" value="simpan">Simpan</button>
        <button type="submit" name="aksi" value="hitung">Hitung</button>
    </form>
</body>
</html>
