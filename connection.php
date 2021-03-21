<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = "dbmy";


$con = mysqli_connect($server,$username,$password,$db);


if ($con){
  //echo "connection successful";
  ?>

<?php

}else{
  //echo "No connection";
  die("no connection" .mysqli_connect_error());
}
?>
