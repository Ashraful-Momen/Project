<?php 
         $warning='Ever this is OK now!';
        if(isset($_GET['operation'])){
            
           

           if(isset($_GET['number1'])&& ($_GET['number2']))
           {
            $x=$_GET["number1"];
            $y=$_GET["number2"];
            $op=$_GET["operation"];

            switch($op){

                case "add": $result =$x+$y;
                            break;
                case "sub": $result =$x-$y;
                            break;
                case "mul": $result =$x*$y;
                            break;
                case "div": $result =$x/$y;
                            break;          

            }
           }
           else{
                $warning="INPUT THOSE NUMBER!!!";
           }
            

        }


?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./calculator.css">
</head>

<body>
  <div class="container-fluid ">
      
      <div class="row">
          <div class="col b-img d-flex justify-content-center align-items-center " style="height: 635px;">
              <div class="card  text-center" style="height: 600px;width: 60%;">

                    <h5 class="my-3">::Calculator::</h5>
                    <hr>
                    <h5><? $warning?></h5>
                    <br>
                    <form action="calculator.php" method="get" class="text-center text-muted w-60 ">
                        <div class="mb-2">
                            <label for="number1">Number1</label>
                            <input class="btn btn-outline-warning" type="number" name="number1" id="number1" value="<?=$x?>" placeholder="Type Number Here">
                        </div>
                        <div class="mb-2">
                            <label for="number2">Number2 </label>
                            <input class="btn btn-outline-warning" type="number" name="number2" id="number2" value="<?=$y?>"  placeholder="Type Number Here">
                        </div>
                       
                        <div class="">
                            <label for="result">Result &nbsp;&nbsp;&nbsp;</label>
                            <input class="btn btn-outline-warning" type="number" name="result" id="result" value="<?= $result?>" disabled>
                        </div>
                        <div class="">
                            <label for="warning">Warning &nbsp;</label>
                            <input disabled class="btn btn-outline-danger" type="text" name="warning" id="warning" value="<?= $warning?>">
                        </div>
                        <div >
                            <input  class="btn btn-outline-info" type="submit" name="operation" value="add" class="btn btn-outline-danger">
                            <input class="btn btn-outline-info" type="submit" name="operation" value="sub" class="btn btn-outline-danger">
                            <input class="btn btn-outline-info" type="submit" name="operation" value="mul" class="btn btn-outline-danger">
                            <input class="btn btn-outline-info" type="submit" name="operation" value="div" class="btn btn-outline-danger">
                        </div>

                    </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>