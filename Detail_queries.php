<?php

<!--here we include the connection file here to use the connection,database,tables and run our queries-->
  include("Connection.php");
  
  
<!--now we run first INSERT QUERY -->
  if(isset($_POST["buttoname"])){
    
    <!--here we contain the all data in variabe from page to in variables-->
    $name=$_POST["name"];   //$name is our natural variable which is create by us but ["name"] in this box variable comes from registeration page's name field in name="name"//
    $email=$_POST["email"];
    $password=$_POST["password"];
    $city=$_POST["city"];













?>
