<?php

  if(isset($_POST['submit'])){

    #catch the variable Through form:
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // mysqli_connect('host','username','password','db_name');
    $dbconnection = mysqli_connect('localhost','root','','shuvo');

    #insert: 
    $sql = "INSERT INTO employee (username,email,password) VALUES('$username','$email','$password')";
    
    $insert= mysqli_query($dbconnection, $sql);

    if($insert){
      echo "Successfully sign in !";
    }

    else
    {
      echo "faild to insert data ";
    }
    // echo "<pre>";
    // print_r($dbconnection);
    // echo "<pre>";
  }
 
  



?>




  <section>
    <div class="container bg-dark mt-5">
      <div class="row">
        <div class="col-8 d-flex justify-content-center offset-2">
          <form class="form text-white" action="" method="POST">
            <!-- Name input -->
            <div class="form-outline my-4">
              <input type="text" id="form4Example1" name="username" class="form-control" required/>
              <label class="form-label" for="form4Example1">User Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="password" id="form4Example1" name="password" class="form-control" required/>
              <label class="form-label" for="form4Example1">password</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" name="email" class="form-control" required/>
              <label class="form-label" for="form4Example2">Email address</label>
            </div>

            <!-- Message input
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" name="Massage" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Message</label>
            </div> -->

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4"  />
              <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
              </label>
            </div> -->

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>