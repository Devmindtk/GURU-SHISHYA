
<!DOCTYPE html>
<html>
<head>
 <title>insert</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="summernote-bs4.css" rel="stylesheet">
  
</head>

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
if(isset($_POST['save']))
{
    $paper = $_POST['paper'];
    $branch = $_POST['branch'];
    $sub  =  $_POST['sub'];
    $sem  =  $_POST['sem'];
   
    
    $sql="INSERT INTO paperdetails (Papername,Subject,Branch,Semester) VALUE ('$paper','$sub','$branch','$sem')";
    $result= mysqli_query($conn,$sql);
    if(!$result)
    {
      die("not inserted".mysqli_error($conn));
    }
    else{
        header('location: paper.php');
    }
}

?>
<body>


 <div class="container" style="position:absolute;top:5%;left:20%;border:2px solid gray;padding:50px;background-color:#deeaee;">
 <h1 style="text-align:center;"> SET PAPER </h1><br>
<form method="POST" action='pdf.php';>
<div class="form-row">
<div class="form-group col-md-9">
      <label for="collg">Institute Name</label>
      <input type="text" class="form-control"required=" "id="collg" name="collg" >
    </div>
    <div class="form-group col-md-3">
      <label for="date">Date of Examination</label>
      <input type="date" class="form-control"required=" "id="date"name="date" >
    </div>
</div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="paper">Question Paper Name</label>
      <input type="text" class="form-control"required=" "id="paper"name="paper" >
    </div>
    <div class="form-group col-md-4">
      <label for="branch">Branch Name</label>
      <select name="branch" class="form-control" id="branch" required="">
      <option>Select Any One</option>
      <option>Electronics and Communication Engineering</option>
      <option>Computer Science</option>
      <option>Information Technology</option>
      <option>Bio technology</option>
      <option>Civil Engineering</option>
      <option>Mechanical Engineering</option>
     
      
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="sem">Semester</label>
      <select name="sem" class="form-control" id="sem" required="">
      <option>Select Any One</option>
      <option>1st</option>
      <option>2nd</option>
      <option>3rd</option>
      <option>4th</option>
      <option>5th</option>
      <option>6th</option>
      <option>7th</option>
      <option>8th</option>
      
      </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="code">Subject code</label>
    <input type="text"required=" "name="code"id="code"class="form-control" >
  </div>
  <div class="form-group col-md-6">
    <label for="sub">Subject Name</label>
    <select name="sub" class="form-control" id="sub" required>
    <option val="">Select Any One</option>
      <option val="cloud computing">cloud computing</option>
      <option val="Machine learning">Machine learning</option>
      <option val="Software development">Software development</option>
      <option val="Analog electronics">Analog electronics</option>
      <option val="Digital Electronics<">Digital Electronics</option>
      <option val="Data Structure">Data Structure</option>
      <option val="Algorithm">Algorithm</option>
      
      </select>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="qno">Total no of question</label>
    <input type="number"required=" " name="qno" id="qno"class="form-control"min="5">
  </div>
  <div class="form-group col-md-4">
    <label for="marks">Total marks</label>
    <input type="number"required=" " name="marks" id="marks"class="form-control" min="5" max="100">
  </div>
  <div class="form-group col-md-4">
    <label for="time">Time allowed</label>
    <input type="time"required=" " name="time" id="time"class="form-control">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12 ">
      <label for="qp">Question Paper description</label>
      <textarea id="summernote"></textarea>
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="questa">Section A Questions</label>
    <textarea class="form-control"  rows="15" id="questa" name="questa"></textarea>
     </div>
    <div class="form-group col-md-6">
      <label for="questb">Section B Question</label>
      <textarea class="form-control"  rows="15" id="questb" name="questb"></textarea>
    </div>
    </div>
    
    
  <button class="btn btn-primary" type="submit" name="done"  style="margin-left:40%;padding:10px 100px;">Generate paper</button>
</form>
</div>
<script src="summernote-bs4.js">
$('#summernote').summernote();
</script>
</body>
</html>
