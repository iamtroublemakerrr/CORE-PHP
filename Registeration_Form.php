<html>
  <head>
    <tittle>Registeration Form</tittle>
<!--javascript cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Form Validation using JavaScript-->
<script>
    function ValidateForm(){
    var name=document.forms["myForm"]["name"].value;
    var email=document.forms["myForm"]["email"].value;
    var password=document.forms["myForm"]["password"].value;
    var city=document.forms["myForm"]["city"].value;
    var mobile=document.forms["myForm"]["mobile"].value;
    var image=document.forms["myForm"]["image"].value;
<!--conditions with alert box-->
    if(name=="" && email=="" && password=="" && city=="" && mobile=="" && image==""){
        alert("all field is required");
        return false;
    }
    if(name==""){
    alert("name required");
    return false;
    }
    if(email==""){
    alert("email required");
    return false;
    }
    if(password==""){
    alert("password required");
    return false;
    }
    if(city==""){
    alert("city required");
    return false;
    }
    if(mobile==""){
    alert("mobile required");
    return false;
    }
    if(image==""){
    alert("image required");
    return false;
    }
</script>
    </head>
<body>
<!--heading -->
  <div class="heading">
    <h1>Welcome To Registeration Form</h1>
  </div>

<!--here is start to make the form and their different fields-->
  <form name="myForm" action="link-page.php" method="POST" onsubmit="ValidateForm()">
    Name <input type="text" name="name" placeholder="Enter Your Name">
    Email <input type="email" name="email" placeholder="Enter Your Email">
    Password <input type="password" name="password" placeholder="Enter Your Password">
    City <select name="city" placeholder="Enter Your City">
         <option value="delhi">Delhi</option>
         <option value="haryana">Haryana</option>
         <option value="punjab">Punjab</option>
         </select>
    Mobile <input type="text" name="mobile" placeholder="Enter Your Mobile">
    Image <input type="file" name="image" placeholder="Upload Image">    //here we take a image and upload in database and also save in folder//
  </form>
  
  
<!--here is the submit button-->
  <input type="submit" name="submit" value="submit">
  
  
</body>
</html>
