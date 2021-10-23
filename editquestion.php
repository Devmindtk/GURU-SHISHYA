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
 if(isset($_POST['done']))
{
    $id=$_POST['qno'];
    $ques=$_POST['ques'];
   $branch=$_POST['branch'];
   $sub=$_POST['sub'];
   $sem=$_POST['sem'];
   $unit=$_POST['unit'];

           
            $sql="UPDATE questionsdetails SET Branch= '$branch',Semester = '$sem', Subject='$sub',Questions='$ques',Unit='$unit' WHERE sno= '$id ' ";
            $result= mysqli_query($conn,$sql);
           
if(!$result)
{
    echo'<script>alert("Data not updated");</script>';
   
}
else{
  echo'<script>alert("Data updated successfully");</script>';
    header('Location:question.php');
}


   
}
?>


