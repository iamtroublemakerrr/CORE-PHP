<!--established a connection between code to database server here we use the XAMPP server used (mysqli) || if you are use the WAMPP server you used (mysql)-->

<?php


<!--established the connection-->
  $con=mysqli_connect('localhost','root','','database');         //after write this without write database your connection will be established//

<!--check the condition connection established or not confirmation using if else condition-->  
 if($con){
  echo"CONNECTION ESTABLISHED");                
  }else{
  die("CONNECTION FAILED".mysqli_error($con));       //we use the die because die has show ini which element and on which line number porblem has to be dedduct//
}
<!--end connection part-->




<!--start create a database-->
  $database="CREATE DATABASE databasename";      //here after write this line database has to be created//
  
<!--check the condition database created or not confirmation-->
if(mysqli_query($con,$database)){
  echo "DATABASE CREATED";
}else{
    die("DATABASE FAILED" .mysqli_error($con));
}
<!--end database part-->



<!--start create a table and all field has to created behalf of feilds of Registeration Form-->
  $table="CREATE TABLE tablename( id int(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    name varchar(50) not null,
                                    email varchar(20) not null,
                                    password varchar(10) not null,
                                    city varchar(50) not null,
                                    mobile int(10) not null)";
<!--check the condition maually table created confirmation or not-->
if(mysqli_query($con,$table)){
  echo"TABLE CREATED";
  }else{
  die("TABLE FAILED".mysqli_error($con));
  }
 
    <!--if you want to add aditional column and field in same table used alter -->
    $add="ALTER TABLE tablename ADD gender varchar(50)";
        <!--check alter table-->
        if(mysqli_query($con,$add)){
            echo"NEW COLUMN ADDED";
            }else{
            die("NEW COLUMN FAILED".mysqli_error($con));
            }
<!--end of table-->


?>
