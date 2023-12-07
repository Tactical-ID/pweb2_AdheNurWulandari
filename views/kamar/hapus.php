<?php
include_once '../../config.php';
include_once '../../controllers/KamarController.php';

$database = new database();
$db=$database->getKoneksi();

if(isset($_GET['id_kmr'])){
    $id_kmr=$_GET['id_kmr'];
    $kamarController= new KamarController($db);
    $result=$kamarController->deleteKamar($id_kmr);

    if($result){
        header("location:kamar");
    }else {
        echo "gagal hapus data";
    }
}