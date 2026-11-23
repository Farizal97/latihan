<?php
$nilai = 78;

if ($nilai >= 80) {
    $grade = "A";
} else if ($nilai >= 70) {
    $grade = "B";
} else {
    $grade = "C";
}

echo "Nilai: " . $nilai . "<br>";
echo "Grade: " . $grade;
?>