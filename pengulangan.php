<?php
//pengulangan php
// for //foreach
$angka = [1,2,3,4,5,6,7,8]; 
?>
<DOCTYPE html>
    <html>
        <head>
            <title>Latihan Pengulangan</title>
            <style>
                div{
                    width: 50px;
                    height: 50px;
                    background-color: cyan;
                    text-align: center;
                    line-height: 50px;
                    margin: 3px;
                    float: left;
                }
            </style>
</head>
<body>

<?php for( $i=0; $i< 7; $i++ ) { ?>
    <div><?php echo $angka[$i]; ?></div>
    <?php } ?>

</body>
</html>