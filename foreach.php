<?php
//pengulangan php
// for //foreach
// $angka = [1,2,3,4,5,6,7, 8]; 
?>
<DOCTYPE html>
    <html>
        <head>
            <title>Latihan Pengulangan</title>
            <style>
                div{
                    width: 50px;
                    height: 50px;
                    background-color: red;
                    text-align: center;
                    line-height: 50px;
                    margin: 3px;
                    float: left;
                }
            </style>
</head>
<body>

<?php foreach ( $angka as $a) { ?>
    <div><?php echo $key; ?></div>
<?php } ?>

</body>
</html>