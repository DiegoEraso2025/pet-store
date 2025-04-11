<?php

   include('config/database.php');

   $fname = $_POST['f_name'];
   $lname = $_POST['l_name'];
   $email = $_POST['e_mail'];
   $passw = $_POST['p_assw'];

   $hashed_password = password_hash($passw, PASSWORD_DEFAULT)

  $sql_validate_email = "
      select 
          count(id) as total
      from 
        users
      where
        email= '$email'and 
        status = true
   ";
   $ans = pg_query($conn, sql_validate_email);

   if($ans){ // ans == true 
      $count = pg_fetch_assoc($ans);
      if($row['total'] > 0){
          echo "User already exits !!!";
              }else{
                    $sql = "INSERT INTO users 
                   (firstname, lastname, email, password)
                   VALUES (' $fname','$lname','$email','$hashed_passwor')
         ";
         $ans = pg_query($conn, $sql);
         if($ans){
             echo "User has been created successfully";
         }else{
             echo "Error";
         }

        }
      }
?>