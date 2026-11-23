<?php
$isSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$names = isset($_POST['nama']) && is_array($_POST['nama']) ? $_POST['nama'] : [];
$mathScores = isset($_POST['matematika']) && is_array($_POST['matematika']) ? $_POST['matematika'] : [];
$biologyScores = isset($_POST['biologi']) && is_array($_POST['biologi']) ? $_POST['biologi'] : [];
$physicsScores = isset($_POST['fisika']) && is_array($_POST['fisika']) ? $_POST['fisika'] : [];

$hasil_siswa = [];

if ($isSubmitted) {
    for ($i = 0; $i < 5; $i++) {
        $name = isset($names[$i]) && is_scalar($names[$i]) ? trim((string) $names[$i]) : '';
        $matematika = isset($mathScores[$i]) && is_numeric($mathScores[$i]) ? (float) $mathScores[$i] : 0;
        $biologi = isset($biologyScores[$i]) && is_numeric($biologyScores[$i]) ? (float) $biologyScores[$i] : 0;
        $fisika = isset($physicsScores[$i]) && is_numeric($physicsScores[$i]) ? (float) $physicsScores[$i] : 0;

        $total = $matematika + $biologi + $fisika;
        $rataRata = $total / 3;

        if ($rataRata >= 90) {
            $grade = 'A';
        } elseif ($rataRata >= 80) {
            $grade = 'B';
        } elseif ($rataRata >= 70) {
            $grade = 'C';
        } elseif ($rataRata >= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        $hasil_siswa[] = [
            'nama' => $name,
            'matematika' => $matematika,
            'biologi' => $biologi,
            'fisika' => $fisika,
            'rata_rata' => $rataRata,
            'total' => $total,
            'grade' => $grade,
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Entry 5 Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 980px; margin: 30px auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        input[type="text"], input[type="number"] { width: 100%; box-sizing: border-box; padding: 6px; }
        button { margin-top: 14px; padding: 10px 18px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Entry 5 Data Siswa</h2>

    <form method="post" action="">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Matematika</th>
                    <th>Nilai Biologi</th>
                    <th>Nilai Fisika</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><input type="text" name="nama[]" value="<?= isset($names[$i]) ? htmlspecialchars((string) $names[$i], ENT_QUOTES, 'UTF-8') : '' ?>" required></td>
                    <td><input type="number" name="matematika[]" min="0" max="100" step="0.01" value="<?= isset($mathScores[$i]) ? htmlspecialchars((string) $mathScores[$i], ENT_QUOTES, 'UTF-8') : '' ?>" required></td>
                    <td><input type="number" name="biologi[]" min="0" max="100" step="0.01" value="<?= isset($biologyScores[$i]) ? htmlspecialchars((string) $biologyScores[$i], ENT_QUOTES, 'UTF-8') : '' ?>" required></td>
                    <td><input type="number" name="fisika[]" min="0" max="100" step="0.01" value="<?= isset($physicsScores[$i]) ? htmlspecialchars((string) $physicsScores[$i], ENT_QUOTES, 'UTF-8') : '' ?>" required></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit">Simpan dan Hitung</button>
    </form>

    <?php if ($isSubmitted) { ?>
        <?php include __DIR__ . '/data.php'; ?>
    <?php } ?>
</body>
</html>
