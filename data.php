<?php if (!empty($hasil_siswa)) { ?>
    <h3>Hasil Simpan dan Hitung</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nilai Matematika</th>
                <th>Nilai Biologi</th>
                <th>Nilai Fisika</th>
                <th>Rata2</th>
                <th>Total Nilai</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil_siswa as $index => $siswa) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($siswa['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= number_format($siswa['matematika'], 2, ',', '.') ?></td>
                <td><?= number_format($siswa['biologi'], 2, ',', '.') ?></td>
                <td><?= number_format($siswa['fisika'], 2, ',', '.') ?></td>
                <td><?= number_format($siswa['rata_rata'], 2, ',', '.') ?></td>
                <td><?= number_format($siswa['total'], 2, ',', '.') ?></td>
                <td><?= htmlspecialchars($siswa['grade'], ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
