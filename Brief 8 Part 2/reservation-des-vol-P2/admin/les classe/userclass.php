<?php

 class User
 {
      public $user;
      public $mail;
      public $pass;
      public $status;

    function __construct()
        {
		   	$this->conn = new mysqli("localhost","root","", "db_gestionvols");
        }
        
    // --------SELECT Function----------
    function login($username, $pass) {
    $query = mysqli_query($this->conn, "SELECT * FROM users WHERE username = '$username' AND pass_word = '$pass' " );
    if(mysqli_num_rows($query) > 0 ){
      $_SESSION['user'] = mysqli_fetch_array($query);
      if( $_SESSION['user']['status'] == 'Admin'){
        header('location: admin/admin.php');
      } 
      else{
      header('location: home.php');
      }
     }

    }
      


    // --------Insert Function----------
    function user_insert($user, $mail, $pass, $status) 
    {	
       $query = mysqli_query($this->conn, "INSERT INTO users values('', '$user', 
                                                                        '$mail', 
                                                                        '$pass', 
                                                                        '$status')");  
        if($query == true)
        {
          return true;	 
        }
        else {	return false;}
     }


    // --------Update Function----------
    function user_update($id, $name, $email, $password, $status) 
    {
        mysqli_query($this->conn,"UPDATE users set username = '$name',
                                                   mail = '$email',
                                                   pass_word = '$password',
                                                   status = '$status'
                                                   WHERE iduser = '$id'");
         
    }

    // --------Delete Function----------
    function user_delete($id) 
    {
        mysqli_query($this->conn,"DELETE from users where iduser = '$id'");           
    }

 }
    ?>
