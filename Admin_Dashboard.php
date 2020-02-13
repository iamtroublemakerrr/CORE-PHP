<?php
//first we include  the Connection File here //
  include("Connection.php");
  
//here we fetch the data from database using SELECT QUERY and show in admin table as a control pannel//
  $a="SELECT * FORM tablename";
  $data=mysqli_query($con,$a);
?>


<html>
<head>
  <tittle>ADMIN DASHBOARD</tittle>
</head>
<body>
  <div class="heading">
    <h1>WELCOME TO ADMIN DASHBOARD</h1>
  </div>
  
  //here we start the print and display the data and make control pannel on ADMIN DASHBOARD//
  <form>
    <table>
      <t>
        <th>sr.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Image</th>
      </t>
                            //here is while loope//  
  <?php
        while($row=mysqli_fetch_assoc($data)){
    ?>
          <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['image'];?></td>
            <td><a href="Edit.php?id=<?php eho $row['id'];?>">Edit</a></td>        //here is we ref the edit page and then go to edit page through pass the['id']//
            <td><a href="Delete.php?id=<?php echo $row['id'];?>">Delete</a></td>   //here is delete query page where they click the delete row has to be deleted and go throgh the ['id']//
          </tr>
       <?php
       }
       ?>
  </form>
  
</body>
</html>
