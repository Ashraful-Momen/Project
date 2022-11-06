<?php 
namespace App\classes;

use App\classes\Database;

class Slider{

    public $title, $desc,$img,$db,$conn,$insert;
    public function __construct($request,$file){
        $this->title=$request['title'];
        $this->desc= $request ['desc'];
        $this->img= $file ['images'];
        $this->db = new Database('shuvo');

       
    }

    public function slider_items(){
        echo $this->title;
        echo "<br>".$this->desc;
        echo "<pre>";
        print_r($this->img);
        echo "</pre>";

        $imageName = "assets/img/".time().$this->img['name'];
       $conn= $this->db->DB_connect();
       $sql =" INSERT INTO `slider_items`(`title`, `desc`, `images`) VALUES ('$this->title','$this->desc','$imageName')";
      // mysqli_query($conn,$sql);

       if(mysqli_query($conn,$sql)==TRUE){
        echo "<br>Data Inserted";
       }
       else{
        echo "<br> Data not inserted";
       }

       move_uploaded_file($this->img['tmp_name'],$imageName);
    }
}