
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
<!DOCTYPE html>
<html>
<head>
 <title>insert</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  
 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet"href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
</head>
<style>
#form
{
  display:none;
}
   h2
   {
     position:relative;
    
   }
   #btn
   {
     position:absolute;
    padding:5px 15px;
    right:0;
     
   }
   i{


border-radius:8px;
       border:2px;
      
       color:white;
   }
   
   
   
   
   .sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #3e4444;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
  color: white;
  display: block;
  margin:20px;
  font-family: 'Courgette', cursive;
  text-transform:uppercase;
}

.sidenav a:hover {
  color: #f1f1f1;
  text-decoration:underline;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body style="background-color:#fefbd8" >

<div class="sidenav">
<a href="home.php"><i>Dashboard</i></a>
  <a href="branch.php"><i>Batches details</i></a>
  <a href="subject.php"><i>Subjects details</i></a>
  <a href="class.php"><i>Examination Schedule</i></a>
  
  <a href="setpapers.php"><i>Generate Question Paper</i></a>
  <a href="paper.php"><i>List of paper</i></a>
  
</div>


 <div class="container" style="position:absolute;top:5%;left:20%;border:2px solid gray;padding:50px;background-color:#deeaee;margin-left:150px;">
 
 <form method="POST" action='pdf.php'>
<h3 style="text-align:center;"> <i>SET PAPER </i></h3>
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
      <input type="text" class="form-control"id="paperss"name="paperss" required=" ">
    </div>
    <div class="form-group col-md-4">
      <label for="branch">Branch Name</label>
      <input type="text" name="branch" class="form-control" id="branchss" required="">
      
    </div>
    <div class="form-group col-md-4">
      <label for="sem">Semester</label>
      <input type="text" name="sem" class="form-control" id="semss" required="">
      
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="code">Subject code</label>
    <input type="text"required=" "name="code"id="code"class="form-control" >
  </div>
  <div class="form-group col-md-6">
    <label for="sub">Subject Name</label>
    <input type="text" name="sub" class="form-control" id="subss" required="">
   
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
      <textarea class="form-control"  rows="20" id="qp" name="qp"></textarea>
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
    
    
  <button class="btn btn-primary" type="submit" name="done"  style="margin-left:30%;padding:10px 100px;">Download paper</button>
    
</form>
   
</div>


</body>
</html>
