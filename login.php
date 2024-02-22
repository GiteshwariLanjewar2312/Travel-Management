<?php
    $mysqli = new mysqli('localhost','Giteshwari','@Giteshwari123','loginform');
   if(isset($_POST["submit"])) {
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $password =$_POST['pass'];
    $confirm =$_POST['confirm'];
    $query= mysqli_query($mysqli,"INSERT INTO registration(firstName,lastName,email, password ,confirm) 
           VALUES('{$firstName}', '{$lastName}', '{$email}', '{$password}', '{$confirm}')");
           $mysqli->query($query);
       if($query){
        echo "Data inserted successfully...";
       }  
       else{
        echo "There is an error.";
       }
   $mysqli->close();
 }


?>