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
if(isset($_POST['done']))
{
   
    $branch = $_POST['branch'];
    $sub  =  $_POST['sub'];
    $sem  =  $_POST['sem'];
    $unit  =  $_POST['unit'];
    $quest = count($_POST["quest"]);  
 if($quest > 0)  
 {  
      for($i=0; $i<$quest; $i++)  
      {  
           if(trim($_POST["quest"][$i] != ''))  
           {  
                "INSERT INTO questionsdetails(Questions) VALUES('".mysqli_real_escape_string($conn, $_POST["quest"][$i])."')";  
               
           }  
      }  
      $sql="INSERT INTO questionsdetails (Subject,Branch,Semester,Unit) VALUE ('$sub','$branch','$sem','$unit')";
      $result= mysqli_query($conn,$sql);
      if(!$result)
      {
        die("not inserted".mysqli_error($conn));
      }
      else{
          header('location: question.php');
      }
  
  
 }  
    
   


}

?>
<!DOCTYPE html>
<html>
<head>
 <title>insert</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>


<body>


 <div class="container" style="position:absolute;top:10%;left:20%;border:2px solid gray;padding:50px;">
 <h1 style="text-align:center;"> ADD QUESTION </h1><br>
<form method="POST"enctype='multipart/form-data' action='addquestion.php'onsubmit="alert('Inserted Successfully')";>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="branch">Branch Name</label>
      <select name="branch" class="form-control">
      <option>Select Any One</option>
      <option>Electronics and Communication Engineering</option>
      <option>Computer Science</option>
      <option>Information Technology</option>
      <option>Bio technology</option>
      <option>Civil Engineering</option>
      <option>Mechanical Engineering</option>
     
      
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="sem">Semester</label>
      <select name="sem" class="form-control">
      <option>Select Any One</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      
      </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="sub">Subject Name</label>
    <select name="sub" class="form-control">
    <option>Select Any One</option>
      <option>cloud computing</option>
      <option>Machine learning</option>
      <option>Software development</option>
      <option>Analog electronics</option>
      <option>Digital Electronics</option>
      <option>Data Structure</option>
      <option>Algorithm</option>
      
      </select>
  </div>
  <div class="form-group col-md-6">
    <label for="unit">Unit</label>
    <select name="unit" class="form-control">
    <option>Select Any One</option>
      <option>Introduction to cloud computing</option>
      <option>Basic Machine learning Algorithm</option>
      <option> Agile Software development</option>
      <option>Introduction to mosfet</option>
      
      </select>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6" id="dynamic_field">
    <label for="ques">Total no of questions</label>
    <select name="ques" class="form-control">
      <option>Select Any One</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      
      </select>
  </div>
    <div class="form-group col-md-6">
    <label for="quest">Questions</label>
    <div class="input_fields_wrap">
    <div><input type="text" name="quest[]" class="form-control"></div><br>
     </div>
    
    <div class="form-group col-md-6">
    <button class="add_field_button btn btn-success">Add More question</button>
    </div>
    </div>
    </div>
  <button type="submit" class="btn btn-primary" name="done" style="margin-left:40%;padding:10px 40px;">Submit</button>
</form>
</div>
</body>
</html>
<script>
	$(document).ready(function() {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
	
	
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<div ><input type="text" name="quest[]" class="form-control" /><a href="#" class="remove_field">Remove</a></div>'); //add input box
            x++; 
	  }
      else{
          alert('5 maximum question is allowed');
      }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).parent('div').remove(); 
		x--;
    })
});
	
	</script>