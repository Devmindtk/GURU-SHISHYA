<!DOCTYPE html>
<html>
<head>
	<title>Elearning</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" href="lightslider-master/src/css/lightslider.css" />                   
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">

 

</head>
<style>
html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
.normal-fonts
  {
    font-weight:300;
  }
 
#headss
{ text-align:center;
  font-size: 55px;
  font-weight: 800;
  margin-bottom: 12px;
  line-height: 1em;
  text-transform: uppercase;
}

.normal-font
  {
    font-weight:300;
    margin-top:10px;
    font-size:40px;

  }
  .theme_color
  {
    color: #07417a;
  }
#heads
{
  font-size: 45px;
  
  text-align:center;
  font-weight: 800;
  margin-bottom: 12px;
  line-height: 1em;
  text-transform: uppercase;
}

*
{
	
box-sizing: border-box;
margin:0px;
padding:0px;
}

a
{
  text-decoration:none;
}


.custom-nav-item:hover
{
	background:red;
	border: 1px;
	border-radius:25px;
	

}
.custom-nav-item a
{
	margin:5px 20px;
	padding:5px;
}
.nav a
{    
	z-index:3;
	
	
	text-align: center;
	cursor:pointer;
	color:white;
	padding:10px 10px;
	
}

nav
{
	position: relative;
	z-index:3;
}
footer
{
	width:100%;
  min-height:100%;
	background: black;
	color:gray;
	opacity:1;
}
div.footers1
{
	display:flex;
	flex-direction:row;
	justify-content: space-around;
}


.feature-box
{
  width:250px;
  height:165px;
  margin:0px 10px;
  border-radius:10px;
  overflow:hidden;
}
.feature-box img{

  width:100%;
  height:100%;
  object-fit:cover;
  object-position:center;
opacity:1;
}
.feature-box img:hover{
  
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
    .item span
{
  font-size: 1rem;
  font-weight:600;
  margin:5px;
  color:black;

}
.item{

  display:flex;
  justify-content:center !important;
  align-items:center;
  flex-direction:column;
 
}
#autoWidth
       {
         display:flex;
         justify-content:center;
         margin:30px auto 40px auto;

       }
       #auto
       {
         display:flex;
         justify-content:center;
         margin:30px auto 40px auto;

       }
       #autos
       {
         display:flex;
         justify-content:center;
         margin:30px auto 40px auto;

       }
       .my-menu {
/*Sets all the content of dropdown div to center*/
                text-align: center; 
            }
       
#autoWidths
{
  display:flex;
         justify-content:center;
         margin:30px auto 40px auto;

}
#reghead
{
  text-align:center;font-family: 'Amatic SC', cursive;color:#34495E;font-size:65px; text-transform:uppercase;
}
#studhead

{
  text-align:center;font-family: 'Amatic SC', cursive;color:#34495E;font-size:65px; text-transform:uppercase;
font-weight:300;
}
#stud
{
  position:absolute;left:30%;top:80%;padding:20px 20px;border:solid 2px white;border-radius:12px;color:white;background-color:#34495E;
}
#studs
{
  position:absolute;left:35%;top:80%;padding:20px 20px;border:solid 2px white;border-radius:12px;color:white;background-color:#34495E;
}
#work
{
  text-align:center;font-family: 'Amatic SC', cursive;color:#34495E;font-size:65px; text-transform:uppercase;
}
#mentor
{
  position:absolute;left:35%;top:80%;padding:20px 30px;border:solid 2px white;border-radius:12px;color:white;background-color:#34495E;
}
#parallax2 {
  /* The image used */
  background-image: url("love.jpg");

  /* Set a specific height */
  min-height: 400px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  width:100%;
}
#parallax1 {
  /* The image used */
  background-image: url("great.jpg");

  /* Set a specific height */
  min-height: 370px;
   width:100%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
#student
{
  width:450px; height:450px;
}
.card
{
	
	
  width:450px; height:450px;
  
 
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
 
  box-shadow: 0 10px 25px #34495E, 0 6px 0px #34495E;
  outline: none;
  border-top-left-radius: 32px;
    border-top-right-radius: 32px;
    border-bottom-right-radius: 32px;
    border-bottom-left-radius: 32px;
}
.card img{
  border-radius:5px;

}
.img
	{
	
        position:relative;

	}
    .img img 
  {
    
  
  width: 100%;
  height: 250px;
  object-fit: fill;


  }

.card-body
{
	background:white;
	font-size:16px;
	cursor:pointer;
	opacity:1;
	display: block;
  border-radius:32px;
	padding:5px;
}
 .carousel-inner img{
  height:700px;
  opacity:2;
}
.carousel-inner{
  
  height:600px;
  width: 100%;
   // Add this
   opacity:2;

  }
  @media (max-width:762px) 
  {
    .img
      {
          position:relative;
      }
      .img img 
  {
    
  
  width: 100%;
  height: 200px;
  object-fit: fill;


  }

      #mentor
      {
    position:absolute;
    left:30%;
    top:85%;
    padding:10px;
  }
  #stud
      {
    position:absolute;
    left:30%;
    top:85%;
    padding:10px;
  }
  #studs
  {
    position:absolute;
    left:35%;
    top:85%;
    padding:10px;
  }
  .card
  {
      height:350px;
      display:flex;
      justify-content:center;
      align-items:center;
      width:300px;

  }
  #student
  {
    height:350px;
      display:flex;
      justify-content:center;
      align-items:center;
      width:300px;

  }
  }
  @media (max-width: 570px) 
  {
    .feature-box
{
  width:150px;
  height:165px;
  margin:0px 5px;
  border-radius:10px;
  overflow:hidden;
}
.feature-box img{

  width:562px;
  height:100%;
  object-fit:cover;
  object-position:center;
opacity:1;
}
    #parallax2 {
  /* The image used */
  background-image: url("love.jpg");

  /* Set a specific height */
  min-height: 400px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  width:562px;
}
#parallax1 {
  /* The image used */
  background-image: url("great.jpg");

  /* Set a specific height */
  min-height: 370px;
   width:562px;
  /* Ceate the parallax scrolling effect */
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
    #reghead
    {
      margin-left:60px;
      text-align:center;
    }
    #studhead
    {
      margin-left:60px;
      text-align:center;
    }
    .card
  {
      height:300px;
      display:flex;
      justify-content:center;
      align-items:center;
      width:300px;
      margin-left:80px;
     
  }
  #student
  {
    height:300px;
      display:flex;
      justify-content:center;
      align-items:center;
      width:300px;
      margin-left:80px;

  }
  #aboutpara{
    margin-left:60px;
    font-size:15px;
  }
  #workpara{
    margin-left:60px;
    font-size:15px;
  }
    .img
      {
          position:relative;
      }
      .img img 
  {
    
  
  width: 100%;
  height: 100px;
  object-fit: fill;


  }
  #cardsrow
  {
    display:flex;
    justify-content:center;
    align-items:center;
  }
  #stud{

    position:absolute;
    left:20%;
    top:70%;
    padding:15px;
  }
    #mentor
      {
    position:absolute;
    left:30%;
    top:70%;
    padding:15px;
  }
      
      footer
      {
        width:562px;
      }
      #workss
      {
        display:block;
        margin:30px;
      }
      #work
      {
        text-align:center;
          margin-left:60px;
          font-size:20px;
      }
     
      #workimg
      {
        width:100px;
    display:flex;
    justify-content:center;
    align-items:center;
      }


.carousel-inner{
  
  height:400px;
  width: 562px;
   // Add this
   opacity:2;

  }
  #deals
  {
    width: 562px;
  }
  .carousel-inner img{
  height:500px;
  opacity:2;
}

  }
 #aboutimg{

  width:500px;height:300px;margin-bottom:15px;
 transition: all 0.3s cubic-bezier(.25,.8,.25,1);
 
 box-shadow: 0 10px 25px #34495E, 0 6px 0px #34495E;
 outline: none;
 }
  
</style>
  
    <body>
   <nav class="navbar navbar-expand-lg navbar-dark  fixed-top"style=" background-image: linear-gradient(3deg,   #36486b, transparent);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav custom-nav">
      <li class="nav-item active custom-nav-item">
        <a class="nav-link" href="index.php"style="color:white;font-size:21px;">Home</a>
      </li>
      <li class="nav-item active custom-nav-item ">
        <a class="nav-link" href="#about"style="color:white;font-size:21px;">About</a>
      </li>
      <li class="nav-item active custom-nav-item ">
        <a class="nav-link" href="#tutors"style="color:white;font-size:21px;">Online Tutors</a>
      </li>
      <li class="nav-item active custom-nav-item ">
        <a class="nav-link" href="#kids"style="color:white;font-size:21px;">Home Tutors</a>
      </li>
      <li class="nav-item active custom-nav-item ">
        <a class="nav-link" href="#deals"style="color:white;font-size:21px;">Study Materials</a>
      </li>
      <li class="nav-item active custom-nav-item ">
        <a class="nav-link" href="#contact"style="color:white;font-size:21px">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>


            
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="board.jpg">
    <div class="carousel-caption d-none d-md-block">
    <h1 style="position:absolute;bottom:650%;left:30%;text-align:center;font-size:70px;">KEEP LEARNING</h1>
    	<p style="position:absolute;bottom:450%;left:27%;text-align:center;font-size:20px;" > "CONNECT TO TUTORS ,LEARN BY TUTORS AND MAKE YOUR FUTURE"
</p>

</h2>
</div>
      
    </div>
    <div class="carousel-item ">
    <img class="d-block w-100" src="stop.jpg">

</div>
<div class="carousel-item">
    <img class="d-block w-100"src="color.jpg">
      
      
    </div>
   
    <div class="carousel-item">
    <img class="d-block w-100" src="onlinelearn.jpg">
      
      
    </div>
   
    <div class="carousel-item">
    <img class="d-block w-100" src="det.jpg" >
      
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pro2.jpg" alt="Second slide">
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pro1.jpg" alt="Third slide" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>






<div class="container my-5" id="abouts">
<h2 id="headss">About<span class="normal-fonts theme_color"> Us </span></h2> <br>
	<div class="row my-5" id="about">
  
  
   <div class="col col-lg-6  col-md-12 col-sm-12">
<img src="aboutus.jpg" id="aboutimg">
</div>

<div class="col col-lg-6  col-sm-12 col-md-12"> 
  
    <p style="font-size: 1.1em;
    line-height: 1.8;z-index:21;" id="aboutpara">Get Free Education.Contact your mentor and get a free Education.Every resources for school kids are avialable.Any one can watch videos, read books and also can download videos or books for further study.You can easily get all the resources without facing any problem and reach to your best teachers avilable in your particular area.So,Visit our website get free education with best teachers and best resources.Please drop a mssage or feedback if any thing more u needed we are there for you</p>
    </div>

    
  </div>
  </div>
  <div  class="container my-5" id="tutors">

  <h2 id="heads">Connect With<span class="normal-font theme_color my-2 mx-3"><br > Online Tutors </br></span></h2> <br>
<div class="container" >
	<div class="row" id="cardsrow">
		<div class="col col-md-6 col-sm-12 d-flex justify-content-center">

    
  <div class="card">
    <h3 style="text-align:center;color:black;font-size:30px;margin-top:10px;font-weight:bold;">Teachers</h3>
  	<div class="img" style="margin:20px;">
    
    <img src="students.png" class="card-img-top fluid "alt="not supported">
    </div>
    <div class="card-body p-1" >
      
      <button id="mentor"><a href="questiongenerator/index.php" id="view"style="color:white;font-weight:bold;font-size:15px;">Teachers Login</a></button>
    
    </div>
  </div>
    
  </div>
  <div class="col col-md-6 col-sm-12 d-flex justify-content-center">

    
<div class="card">
  <h3 style="text-align:center;color:black;font-size:30px;margin-top:10px;font-weight:bold;">Students</h3>
  <div class="img" style="margin:20px;">
  
  <img src="students.png" class="card-img-top fluid "alt="not supported">
  </div>
  <div class="card-body p-1" >
    
    <button id="mentor"><a href="studentfold/studenthome.php" id="view"style="color:white;font-weight:bold;font-size:15px;">Students Login </a></button>
  
  </div>
</div>
  
</div>
</div>
</div>
</div>
<br>
<div class=" parallax" id="parallax1"></div>
<br>
<br>
<section>
<h2 id="heads">Connect With<span class="normal-font theme_color"><br> Home Tutors </span></h2> <br>

  
  <div class="container" id="kids" >
	<div class="row" id="cardsrow">
	
	<div class="col d-flex justify-content-center">

  <div class="card" id="student">
    <h3 style="text-align:center;color:black;font-size:30px;margin-top:10px;font-weight:bold;">Teachers</h3>
  	<div class="img" style="margin:20px;">
    
    <img src="students.png" class="card-img-top fluid "alt="not supported">
    </div>
    <div class="card-body p-1">
      
      <button id="studs"><a href="forms.php" id="view"style="color:white;font-weight:bold;font-size:15px;">Be a Mentor </a></button>
    
    </div>
  </div>
    
  </div>
  <div class="col d-flex justify-content-center">

<div class="card" id="student">
  <h3 style="text-align:center;color:black;font-size:30px;margin-top:10px;font-weight:bold;">Students</h3>
  <div class="img" style="margin:20px;">
  
  <img src="students.png" class="card-img-top fluid "alt="not supported">
  </div>
  <div class="card-body p-1">
    
    <button id="stud"><a href="teacherforms.php" id="view"style="color:white;font-weight:bold;font-size:15px;">Connect with Mentor </a></button>
  
  </div>
</div>
  
</div>



</div>
</div>
</section>
<br>
<br>
<section id="deals" class="my-5">
<h2 id="headss">Study<span class="normal-fonts theme_color"> Materials </span></h2> <br>

    
    <ul id="autoWidth" class="cs-hidden">

     
      <li class="item">
        <div class="feature-box">

         
            <img src="mths.jpg">
        
          </div>
          <span> MATHS</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="science.jpg">
         
          </div>
          <span> SCIENCE</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="geo.jpg">
        
          </div>
          <span> SOCIAL STUDIES</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="computer.jpg">
         
          </div>
          <span> COMPUTER</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="eng.jpg">
          
          </div>
          <span> ENGLISH</span>
      </li>
      
    </ul>
  </section>
  <section class="deals">
    
    <ul id="autoWidths" class="cs-hidden">

     
    <li class="item">
        <div class="feature-box">

         
            <img src="mths.jpg">
        
          </div>
          <span> MATHS</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="science.jpg">
         
          </div>
          <span> SCIENCE</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="geo.jpg">
        
          </div>
          <span> SOCIAL STUDIES</span>
      </li>
      <li class="item">
        <div class="feature-box">

         
            <img src="computer.jpg">
         
          </div>
          <span> COMPUTER</span>
      </li>
     
      
      
    </ul>
  </section>
<br>
<br>
<div class="parallax" id="parallax2"></div>
<br>
<div class="container my-5" id="abouts">
<h2 id="headss">How Does It<span class="normal-fonts theme_color"> It Works? </span></h2> <br>
	<div class="row my-5" id="about">
  
  
   

<div class="col col-lg-6  col-sm-12 col-md-12"> 
  
    <p style="font-size: 1.1em;
    line-height: 1.8;z-index:21;" id="aboutpara">Get Free Education.Contact your mentor and get a free Education.Every resources for school kids are avialable.Any one can watch videos, read books and also can download videos or books for further study.You can easily get all the resources without facing any problem and reach to your best teachers avilable in your particular area.So,Visit our website get free education with best teachers and best resources.Please drop a mssage or feedback if any thing more u needed we are there for you</p>
    </div>
    <div class="col col-lg-6  col-md-12 col-sm-12">
<img src="edu.jpg" id="aboutimg">
</div>
    
  </div>
  </div>
  <div class="wrapper" >

    <footer id="contact">
		<div class="container">
		
			<div class="para">
				Questions? Call 000-800-040-1843
			</div>
			<div class="footers1">
				<span id="content1">
					<p>FAQ</p>
					<p><i>Investor Relations</i></p>
					<p><i> Privacy</i></p>
					<p><i> Speed Test</i></p><br>
					
				
				</span>
				<span id="content2">
        <h3> Category </h3>
					<p><i>Web development</i></p>
					<p><i>Machine learning</i></p>
					<p><i> Artificial intelligence</i></p>
					<p><i> data science</i></p>
				</span>
				
				<span id="content2">
        <h3> Contact us </h3>
					<div>
                 <i class="fa fa-map-marker" id="place"></i><span class="form-info"><i>  192 City Boston Amercia #345</i></span><br>
                 <i class="fa fa-phone" id="phone"> </i><span class="form-info"> <i> +92 00034567890</i></span><br>
                 <i class="fa fa-envelope" id="mail"></i><span class="form-info"> <i>JhonDoe12@Gmail.com</i></span>
               </div>
				</span>
			</div>
		</div>
  </div>
</div>
	</footer>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="lightslider-master/src/js/lightslider.js"></script>
<script>

if($(window).height() > $("body").height()){
  $("footer").css("position", "fixed");
} else {
  $("footer").css("position", "static");
}
</script>
<script type="text/javaScript">
  $(document).ready(function() {
$('#autoWidth').lightSlider({
    autoWidth:true,
    loop:true,
    onSliderLoad: function() {
        $('#autoWidth').removeClass('cS-hidden');
    } 
});  
});
</script>
<script type="text/javaScript">
  $(document).ready(function() {
$('#autoWidths').lightSlider({
    autoWidth:true,
    loop:true,
    onSliderLoad: function() {
        $('#autoWidths').removeClass('cs-hidden');
    } 
});  
});
</script>

	 
</body>
</html>