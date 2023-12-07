<?php
include_once '../../config.php';
include_once '../../controllers/KamarController.php';
require '../../index.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])) {
    $no_kmr=$_POST['no_kmr'];
    $tipe=$_POST['tipe'];
    $status=$_POST['status'];
    $foto=$_POST['foto'];
    $harga_kmr=$_POST['harga_kmr'];

    $kamarController=new KamarController($db);
    $result=$kamarController->createKamar($no_kmr,$tipe,$status,$foto,$harga_kmr);

    if($result){
        header("location:kamar");

    }else {
        header("location:tambah.php");
    }
}