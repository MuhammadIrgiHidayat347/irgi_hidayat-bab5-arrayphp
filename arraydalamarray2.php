<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach ( $angka as $a) : ?>
    <?php foreach ( $a as $b) : ?>
        <div class="kotak"><?php echo $b; ?></div>
        <?php endforeach; ?>
        <?php endforeach; ?>   
<?