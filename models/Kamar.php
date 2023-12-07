<?php
class Kamar{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllKamar() {
        $query="SELECT * from kamar";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createKamar($no_kmr,$tipe,$status,$foto,$harga_kmr){
        $query="INSERT INTO kamar (no_kmr,tipe,status,foto,harga_kmr) values('$no_kmr','$tipe','$status','$foto','$harga_kmr')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
    public function getKamarById($id_kmr)
    {
    $query="SELECT no_kmr,tipe,status,foto,harga_kmr from kamar where id_kmr=$id_kmr";
    $result=mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
    }
    public function updateKamar($id_kmr,$no_kmr,$tipe,$status,$foto,$harga_kmr)
    {
        $query="UPDATE kamar set no_kmr='$no_kmr', tipe='$tipe', status='$status', foto='$foto', harga_kmr='$harga_kmr' where id_kmr='$id_kmr'";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }
    public function deleteKamar($id_kmr)
    {
        $query = "DELETE FROM kamar WHERE id_kmr=$id_kmr";
        $result=mysqli_query($this->koneksi,$query);
        if ($result)
        { return true;
        }else {
            return false;
        }
    }
}