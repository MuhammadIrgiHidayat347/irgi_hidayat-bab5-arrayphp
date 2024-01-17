<?php
// $nomor = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
// foreach($nomor as $angka){
//     if ($angka % 2 == 0){
//         echo $angka;
//         echo "<br>";
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
<tittle></tittle>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-left: 50vh; margin-top: 20vh;">
<h3 style="padding-left: 32vh;">Biodata</h3>
<form>
  <div class="form-group">
    <div class="col-md-6">
    <label>Nama</label>
    <input type="name" class="form-control" placeholder="Masukan Nama Asli Anda">
  </div>
  <div class="form-group ">
    <div class="col-md-6">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Masukan Email Anda">
  </div>
  <!-- <div class="form-group ">
    <div class="col-md-6">
    <label>Password</label>
    <input type="email" class="form-control" placeholder="Masukan Password Anda">
  </div> -->

  <div class="container">
    <label>Hobi</label>
    <br>
  <label for="myCheckbox">Membaca</label>
<input type="checkbox" id="myCheckbox" name="myCheckbox">

<label for="myCheckbox">Menulis</label>
<input type="checkbox" id="myCheckbox" name="myCheckbox">

<label for="myCheckbox">Music</label>
<input type="checkbox" id="myCheckbox" name="myCheckbox">

<label for="myCheckbox">Traveling</label>
<input type="checkbox" id="myCheckbox" name="myCheckbox">

<label for="myCheckbox">Shoping</label>
<input type="checkbox" id="myCheckbox" name="myCheckbox">
<br>

<!-- <textarea rows="4" cols="50">
    Tuliskan Komentar Anda
</textarea>
<br>

<button type="button" class="btn btn-outline-dark">Kirim</button> -->

</form>
</div>
</body>
</html>

<!-- <?php
    // echo "Data yang tersimpan: <br>";
    // $hobi = $_POST['hobi'];
    // $jumlah_hobi = count($hobi);
    // if ($jumlah_hobi > 0){
    //     for($i=0; $i<$jumlah_hobi;$i++)
    // {}
    //     echo"$hobi[$i] <br>";
    // }
?> -->

<div class="container">
<!-- Formulir untuk input komentar -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="komentar">Masukkan Komentar:</label>
    <br>
    <textarea name="komentar" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" value="Submit">
</form>

<?php
// Cek apakah ada data yang dikirim dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai komentar dari formulir
    $komentar = $_POST["komentar"];

    // Tampilkan komentar
    echo "<p>Komentar Anda:</p>";
    echo "<p>$komentar</p>";
}
?>
