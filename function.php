<?php
class Model
{
 //Connection Properties
private $servername = "localhost";
private $username = "root";
private $password;
private $dbname="oopcrud";
private $connect;

public function __construct()
{
   try {
    $this->connect=new mysqli($this->servername,$this->username,$this->password,$this->dbname );
   } catch (Exception  $Exception ) {
    echo "connection Faild" .$Exception->getMessage() ;
   }
}
public function insart()
{
   if (isset($_POST['submit'])) {
    # code...

   }
} 


















}







?>