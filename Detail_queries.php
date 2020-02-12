<?php

<!--here we include the connection file here to use the connection,database,tables and run our queries-->
  include("Connection.php");
  
  
<!--now we start and  run first INSERT QUERY -->
  if(isset($_POST["buttoname"])){
    
    <!--here we contain the all data in variabe from page to in variables-->
    $name=$_POST["name"];   //$name is our natural variable which is create by us but ["name"] in this box variable comes from registeration page's name field in name="name"//
    $email=$_POST["email"];
    $password=$_POST["password"];
    $city=$_POST["city"];
    $mobile=$_POST["mobile"];
    
      <!--INSERT QUERY-->
  $insert="INSERT INTO tablename(name,email,password,city,mobile)VALUES('$name','$email','$password','$city','$mobile')";      //(name,email...etc)itsa table field  || ('$name','$email',etc..)its your variable which is insert in table using insert query//

    <!--check the query and data inserted or not-->
      if(mysqli_query($con,$insert)){
        echo"DATA INSERTED";
      }else{
        die("DATA INSERTED FAILED".mysqli_error($con));
      }
<!--end of insert query-->










?>
