<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Entry 3 Barang Tanpa Database</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 720px; margin: 30px auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        input[type="text"], input[type="number"] { width: 100%; box-sizing: border-box; padding: 6px; }
        button { margin-top: 14px; padding: 10px 18px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Form Entry Barang (3 Item)</h2>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 3; $i++) {?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><input type="text" name="nama[]" required></td>
                    <td><input type="number" name="jumlah[]" min="1"></td>
                    <td><input type="number" name="harga[]" min="0"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit">Simpan & Hitung</button>
    </form>
</body>
</html>
