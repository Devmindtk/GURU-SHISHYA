<?php
if(isset($_POST['done']))
{
	
	echo "<script type='text/javascript'>alert('profile created successfully');</script>";

}
?>
<!DOCTYPE html>  
<html>  
<head>  
<title>Registration page</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
 
	<style>
label {
    font-weight:40px;
	color:white;}
	.normal-font
  {
    font-weight:300;
    
    

  }
  .theme_color
  {
    color: #07417a;
  }
#heads
{
  font-size: 45px;
  color:orangered;
  text-align:center;
  font-weight: 800;
  margin-bottom: 12px;
  line-height: 1em;
  text-transform: uppercase;
}
body
{
	opacity:1;
	color:white;
}

</style>
<body style="background-image: url(dark3.jpg);background-size:cover;">
 <div class="container my-6 shadow-lg">
   <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6"style="margin:50px 50px;"> 
      <h2 id="heads">Make Your<span class="normal-font theme_color">Profile </span></h2> <br>
        
        <hr>
		<form method="POST" action="profile.php">
		<div class="form-group mt-3 mb-3"  >  
		<label class="form-label">Upload your photo</label><br>
        <input type="file" required="" name="image" >
</div>
		    <div class="form-group mb-2" >
		    	<label class="form-label">Full Name</label>
		    	<input type="text" class="form-control " required="" name="user">
		  	</div>

		  	<div class="form-group mb-2">
		    	<label  class="form-label">Email</label>
		    	<input type="Email" class="form-control" required=""name="email">
		  	</div>
		    <div class="form-group mb-2">
		    	<label  class="form-label">Contact No</label>
		    	<input type="text" class="form-control " required=""name="contact">
		  	</div>
              <div class="form-group mb-2">
		    	<label  class="form-label">Address</label>
		    	<input type="text" class="form-control " required=""name="address">
		  	</div>
			  <div class="form-group mb-2">
		    	<label  class="form-label">PIN Code</label>
		    	<input type="text" class="form-control " required=""name="contact">
		  	</div>
              <div class="form-group mb-2">
		    	<label  class="form-label">Highest Qualification</label>
		    	<input type="text" class="form-control " required=""name="qualification">
		  	</div>
              <div class="form-group mb-2">
		    	<label  class="form-label">Teaching Experience</label>
                <br>
                <p>Please include up to which class do you teach student,Your fees ,Home tutor or working on any coaching institute with its name,or any previous working experience mention it all.</p>
		    	<textarea rows="7" class="form-control" required=""name="experience"></textarea>
  </div>
		  	
		  	<button type="submit" class="btn btn-primary" name="done">Submit</button>
		</form>
      </div>
    </div>
  </div>
 </body>  
</html>