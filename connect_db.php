<?php
   // database configuration 
   $sernamename = "localhost";
   $username    = "root";
   $passoword   = "";
   $databasename= "registration";
   // create database connection
   $con = mysqli_connect($sernamename, $username,$passoword,$databasename);
   // check connection
   if ($con->connect_error) {
      die("Connection failed". $con->connect_error);
   }
?>