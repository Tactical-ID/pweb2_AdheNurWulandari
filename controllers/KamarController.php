<?php
include_once '../../models/Kamar.php';

class KamarController 
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Kamar($db);
    }
    public function getAllKamar()
    {
        return $this->model->getAllKamar();
    }
    public function createKamar($no_kmr,$tipe,$status,$foto,$harga_kmr){
        return$this->model->createKamar ($no_kmr,$tipe,$status,$foto,$harga_kmr);
    }
    public function getKamarById($id_kmr)
    {
        return $this->model->getKamarById($id_kmr);
    }
    public function updateKamar($id_kmr,$no_kmr,$tipe,$status,$foto,$harga_kmr)
    {
        return $this->model->updateKamar($id_kmr,$no_kmr,$tipe,$status,$foto,$harga_kmr);
    }
    public function deleteKamar($id_kmr)
    {
        return $this->model->deleteKamar($id_kmr);
    }
}