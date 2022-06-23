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
    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['mother_name']) && isset($_POST['father_name']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['dob']) && isset($_POST['pincode']) && isset($_POST['course']) && isset($_POST['email_id'])) {
     if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['mother_name']) && !empty($_POST['father_name']) && !empty($_POST['address']) && !empty($_POST['gender']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['dob']) && !empty($_POST['pincode']) && !empty($_POST['course']) && !empty($_POST['email_id'])) {
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $mother_name=$_POST['mother_name'];
      $father_name=$_POST['father_name'];
      $address=$_POST['address'];
      $gender=$_POST['gender'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $dob=$_POST['dob'];
      $pincode=$_POST['pincode'];
      $course=$_POST['course'];
      $email_id=$_POST['email_id'];
//sql Query
      $query="INSERT INTO student_table( first_name,last_name,mother_name,father_name,address,gender,state,city,dob,pincode,course,email_id)VALUES ('$first_name','$last_name','$mother_name','$father_name','$address','$gender','$city','$dob','$pincode','$course','email_id')";
      if ($sql= $this->connect->query($query)) {
         echo'<script>alert("data submit successfully")</script>';
      }

     }
    }

   }
} 


















}







?>