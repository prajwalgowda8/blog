<?php
include_once"assets/config.php";
session_start();
if(isset($_GET['c_id'])){

    $del = $_GET['c_id'];
    $mysqli = new mysqli("localhost","root","","foodstuff");
    $delete=$mysqli->query( "DELETE FROM
      cart
    where c_id='$del'");?>

    <?PHP

      header("location: myCart.php");

}
?>
