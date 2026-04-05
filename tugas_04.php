//inisialisasi data base
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_bukutamu";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if (!$koneksi){
    die("koneksi gagal : ".mysqli_connect_error()."<br>");
} 
?>

<!--  operasi update menggunakan CLI-->
  
<?php 
include'koneksi.php';

// ambil input dari terminal
$id = readline("Masukan id yang ingin di update:");
$namaBaru = readline("Masukan Nama baru : ");

// update query
$query = "UPDTE tamu SET nama= '$namaBaru' WHERE id='$id' ";

// eksekusi query

if (mysqli_query($koneksi, $query)){
    echo " DATA BERHASIL  UPDATE ";
}else{
    echo" DATA GAGAL UPDATE !! ". mysqli_error($koneksi)."<br>";
}

?>