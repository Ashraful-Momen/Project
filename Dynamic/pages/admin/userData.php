<?php
  // mysqli_connect('host','username','password','db_name');
  $dbconnection = mysqli_connect('localhost','root','','shuvo');

  $sql = "SELECT * FROM employee";

  
  
  $read= mysqli_query($dbconnection, $sql);
//   while($users=mysqli_fetch_array($read)){ #if while Loop use in here then below while loop not be worked!
//     print_r($users);
//   }
//   $users=mysqli_fetch_array($read,MYSQLI_ASSOC); #mysqli_assoc : converted data into associte array!
//   echo "<pre>";
//   var_dump($users);
//   echo "</pre>";
?>


  </section>
  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>

  <?php
         while($users=mysqli_fetch_assoc($read)){?>
           
      <tr class="text-white bg-dark">
        <th scope="row"><?php echo $users["ID"]?></th>
        <td><?php echo $users["username"]?></td>
        <td><?php echo $users["email"]?></td>
        <td><?php echo $users["password"]?></td>
        <td><?php echo "Edit/Delete"?></td>
        <td><?php echo "status"?></td>
        
     
      </tr>
           
         <?php }
        
        ?>
   
    
  </tbody>
</table>
