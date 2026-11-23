<?php
if (isset($_POST['kirim'])) {
    
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h2>Data Berhasil Diterima</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br><br>";
    
    echo "<a href='latihan.php'>Kembali ke Form</a>";
} 
?>
