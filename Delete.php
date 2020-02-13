<?php
                //include connection file//
         include("Connection.php");
    
    //now get the id which is coming from admin dashboard delete anchor tag//
   $id=$_GET['id'];
    
    //delete query//
    $delete="DELETE FORM  tablename WHERE id='$id'";
    
    //check the condition//
    if(mysqli_query($con,$delete)){
    echo"DELETE SUCCESSFULLY";
    }else{
    echo"DELETE FAIL";
    }
?>
