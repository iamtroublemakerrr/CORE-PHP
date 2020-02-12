<html>
  <head>
    <tittle>Registeration Form</tittle>
  </head>
<body>
<!--heading -->
  <div class="heading">
    <h1>Welcome To Registeration Form</h1>
  </div>

<!--here is start to make the form and their different fields-->
  <form action="link-page.php" method="POST">
    Name <input type="text" name="name" placeholder="Enter Your Name">
    Email <input type="email" name="email" placeholder="Enter Your Email">
    Password <input type="password" name="password" placeholder="Enter Your Password">
    City <select name="city" placeholder="Enter Your City">
         <option value="delhi">Delhi</option>
         <option value="haryana">Haryana</option>
         <option value="punjab">Punjab</option>
         </select>
    Mobile <input type="text" name="mobile" placeholder="Enter Your Mobile">
    
<!--here is the submit button-->
  <input type="submit" name="submit" value="submit">
  </form>
  
</body>
</html>
