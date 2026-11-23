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

echo "Nilai: " . $nilai . "<br>";
echo "Grade: " . $grade;
?>