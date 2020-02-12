<html>
  <head>
    <tittle>Login Form</tittle>
<!--javascript cdn-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--javascript Validation-->
<script>
function ValidateForm(){
  var email=document.forms["myForm]["email"].value;
  var password=document.forms["myForm"]["password"].value;
<!--javaScript Condition-->
  if(email=="" && password==""){
  alert("email and password fill must");
  return false;
  }
  if(email==""){
  alert("email required");
  return false;
  }
  if(password==""){
  alert("password required");
  }
  </script>
  </head>
<body>
<!--heading -->
  <div class="heading">
    <h1>Welcome To Login Form</h1>
  </div>
<!--here it is start the login form-->
  <form name="myForm action="action.php" method="POST" onclick="ValidateForm()">
    Email<input type="email" name="email" placeholder="Enter Your Email">
    Password<input type="password" name="password" placeholder="Enter Your Password">
  </form>
  
<!--here is submit button as known as Login button-->
  <input type="submit" name="login" value="login">
  
  
  
  
</body>
</html>
