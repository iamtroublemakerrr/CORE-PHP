<?php

<!--here we include the connection file here to use the connection,database,tables and run our queries-->
  include("Connection.php");
<!------------------------------------------START INSERT QUERY ZONE---------------------------------------------------->
  
//now we start and  run first INSERT QUERY //
  if(isset($_POST["buttoname"])){
    
    //here we contain the all data in variabe from page to in variables//
    
    $name=$_POST["name"];   //$name is our natural variable which is create by us but ["name"] in this box variable comes from registeration page's name field in name="name"//
    $email=$_POST["email"];
    $password=$_POST["password"];
    $city=$_POST["city"];
    $mobile=$_POST["mobile"];

    //its code for insert the image and also image goes into folder and its stored.//
    $folder="upload_image/";                            //its a name of folder//
    $image=$_FILES['image']['name'];                    //store the file name in variable//
    $pathdoc=$_FILES['image']['tmp_name'];              //store a value in tmp variable //
    $path=$folder.$image;                              //put the image in path using concatination//
	if (move_uploaded_file($pathdoc,$path));             //aftre this and parameters image into folder//
      
    //INSERT QUERY//
 $insert="INSERT INTO tablename(name,email,password,city,mobile,image)VALUES('$name','$email','$password','$city','$mobile','$image')";      //(name,email...etc)itsa table field  || ('$name','$email',etc..)its your variable which is insert in table using insert query//

    //check the query and data inserted or not//
      if(mysqli_query($con,$insert)){
        echo"DATA INSERTED";
      }else{
        die("DATA INSERTED FAILED".mysqli_error($con));  
      }
<!--------------------------------------END OF INSERT QUERY ZONE-------------------------------------------------->
  
  
  
  
<!------------------------------------START SELECT QUERY----------------------------------------------------------->
  
//In this query we take the email id and password from database and matched the email and password when person loged in//

  if(isset($_POST["buttonname"])){
    
   //here we take the variable from login page and store in self make variable//
     $email=$_POST["email"];
    $password=$_POST["password"];

  //select query//
    $select="SELECT email,password FROM tablename WHERE email='$email' AND password='$password'";
    
    $data=mysqli_query($con,$select);                  //we connect and get data//
    $row=mysqli_fetch_array($data);                    //we take the all data in array//

//now we matched the email and password is correct or not //
    if($row['email']==$email && $row['password']==$password){
      echo"EMAIL AND PASSWORD MATCHED";
    }else{
      echo"EMAIL AND PASSWORD DOES'NT MATCHED";
    }

//if you want to admin also has to be go through from same login page so we static the email and password//
    if($_POST['email']=='admin@gmail.com' && $_POST['password']='admin@123'){
      echo"ADMIN HAS TO ACCESSED ";                //here  you also give the location of page using header tag//
    }else{
      echo"ACCESS DENIED";
    }

<!-----------------------------END OF SELECT QUERY---------------------------------------------------------------->





?>
