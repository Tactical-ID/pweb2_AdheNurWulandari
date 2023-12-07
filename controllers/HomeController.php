<?php
class HomeController
{
    public function home (){
        header("location:http://localhost/PWEB2//studikasus.php");

    } public function user (){
        header("location:http://localhost/PWEB2/studikasus/views/user/index.php");
    }
    public function kamar (){
        header("location:http://localhost/PWEB2/studikasus/views/kamar/index.php");
    }
}