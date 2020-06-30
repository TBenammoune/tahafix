<?php

include "les classe/userclass.php";
$db = mysqli_connect("127.0.0.1", "root", "", "db_gestionvols");

$id = $_GET['id'];

    $users = new User();
	  $users->user_delete($id);

  if($users == true){
    header("location: admin.php");
  }

 ?>