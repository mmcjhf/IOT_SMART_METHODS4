<?php

$servername = "localhost";
    $username = "root";
    $password = "Zaq1mlp1";
    $database = "task4";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(isset($_GET['A']))
   {
     echo "<h1>front</h1>";
     $sql = "INSERT INTO dirction VALUES ('front')";
    mysqli_query($conn, $sql);
   }
   if(isset($_GET['B']))
  {
    echo "<h1>left</h1>";
    $sql = "INSERT INTO dirction VALUES ('left')";
   mysqli_query($conn, $sql);
  }
  if(isset($_GET['D']))
 {
   echo "<h1>right</h1>";
   $sql = "INSERT INTO dirction VALUES ('right')";
  mysqli_query($conn, $sql);
 }
 if(isset($_GET['F']))
{
  echo "<h1>back</h1>";
  $sql = "INSERT INTO dirction VALUES ('back')";
 mysqli_query($conn, $sql);
}
if(isset($_GET['C']))
{
 echo "<h1>stop</h1>";
 $sql = "INSERT INTO dirction VALUES ('stop')";
mysqli_query($conn, $sql);
}
?>
