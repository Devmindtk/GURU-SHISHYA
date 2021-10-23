<?php

$servername="localhost";
$username="root";
$password="";
$database="questiongenerator";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
?>
<?php
 if(isset($_POST['dones']))
{
    $id=$_POST['branchno'];
    $paper=$_POST['papers'];
   $branch=$_POST['branchs'];
   $sem=$_POST['sems'];
   $sub=$_POST['subs'];

           
            $sql="UPDATE generatepaper SET branch= '$branch',semester='$sem',subject= '$sub',paper='$paper'WHERE Id= '$id ' ";
            $result= mysqli_query($conn,$sql);
           
if(!$result)
{
    echo'<script>alert("Data not updated");</script>';
   
}
else{
  echo'<script>alert("Data updated successfully");</script>';
    header('Location:paper.php');
}


   
}
?>


