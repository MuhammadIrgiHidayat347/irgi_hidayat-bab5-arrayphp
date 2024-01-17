<?php
//pengulangan php

$mahasiswa =
    ["rudi nugroho", "1202172060", "sistem informasi", "rudi@telkomuniversity.ac.id"];
?>
<!DOCTYPE html>
<html>
<head>
<tittle>Latihan daftar mahasiswa</tittle>

</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ( $mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>