<!DOCTYPE html>
<html>
<head>
<title>Latihan array dalam array</title>
<style>
    .kotak{
        width: 50px; height: 50px;
        background-color: cyan;
        text-align: center;
        line-height: 50px; margin: 3px;
        float: left;
        transition: 1s;
    }
    .kotak:hover{
        transform:rotate(360deg);
        border-radius: 50%;
    }
</style>
</head>
<body>

<?php
$angka = [1,2,3,4,5,6,7,8,9];
?>
<?php foreach ( $angka as $a) : ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?></body>
</html>
