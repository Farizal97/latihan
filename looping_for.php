<?php
$nilai = 78;

switch (true) {
    case ($nilai >= 90):
        $grade = "A";
        break;
    case ($nilai >= 80):
        $grade = "B";
        break;
    case ($nilai >= 70):
        $grade = "C";
        break;
    case ($nilai >= 60):
        $grade = "D";
        break;
    default:
        $grade = "E";
}

echo "looping for<br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$i, $j<br>";
    }
}

echo "<br>looping while<br>";

$i = 0;
while ($i <= 5) {
    echo "Perulangan ke-$i<br>";
    $i++;
}

echo "Nilai: " . $nilai . "<br>";
echo "Grade: " . $grade;
?>

