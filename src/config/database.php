<?php
  $host      = "localhost";
  $port      = "5432";
  $dename    = "petstore";
  $user      = "postgres";
  $password  = "unicesmag";

  $data_connection = "
  host = $host
  port = $dbname
  user = $user
  password = $password
  ";
$conn = pg_connect($data_connection);

if(!$conn){
    echo"Connection error";
}else {
    echo "succes !!!";
}

pg_close($conn);

?>