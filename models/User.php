<?php
class User{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllUser() {
        $query="SELECT * from user";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createUser($nama, $username, $password,$level){
        $query="INSERT INTO user (nama,username,password,level) values('$nama', '$username',' $password','$level')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
    public function getUserById($id)
    {
    $query="SELECT * from user where id=$id";
    $result=mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
    }
    public function updateUser($id, $nama, $username, $password,$level)
    {
        $query="UPDATE user set nama='$nama', username='$username', password='$password', level='$level' where id='$id'";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }
    public function deleteUser($id)
    {
        $query = "DELETE FROM user WHERE id=$id";
        $result=mysqli_query($this->koneksi,$query);
        if ($result)
        { return true;
        }else {
            return false;
        }
    }
}