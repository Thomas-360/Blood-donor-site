<!DOCTYPE html>
<html>
<head>
	<title>Blood donors site</title>
  <link rel="icon" type="image/png" href="images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Services.css">
	<link rel="stylesheet" type="text/css" href="Auto slide.css">
  <link rel="stylesheet" type="text/css" href="home1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 4.5s;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}

</style>

<body>
<div class="container-fluid">

<div class="row">
 <div class="col-xs-12">
  <div class="icons">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
  </div>
  </div>
  </div>

  <header>
   <h2>
<span style="font-size:25.0pt;
font-family:calibri; color:"><img src="images/logo.jpg" width="82" height="80"> BlOOD DONORS SITE</span>
    </h2>
   </header>

  <div class="bar"> 
<ul>
	<li><a class="active" href="#">Home</a></li>
	<li><a href="#">Veryfy Donor</a></li>
	<li><a href="#">Contacts</a></li>
	<li style="float:right;"><a href="Admin.php">Staff Login</a></li>
</ul>
  </div>
 
<br>

<div class="row">
  <div class="rotate">
    <div class="col-xs-9">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/facts benefits.jpg" width="870" height="315">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/blood.jpg" width="870" height="315">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/hands.jpg" width="870" height="315">
    </div>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script> 
  </div>
  </div>
  
 <div class="col-xs-3">
    <div class="box1">
     <img src="images/pin1.jpg" width="30" height="20"><h4><b>Annoucements</b></h4>
      <p>
      On 14 June every Year WHO and all countries celebrate the World Blood Donor Day.
      The need for safe blood is universal. Safe blood is critical both for treatments and urgent interventions.Donate blood save life. 
      </p>
          
    </div>
<br>

  <div class="button">
    <input type="submit" name="Request" value="Click here for Emergency">
  </div>
  </div>

</div>

<br>

<div class="Box">
<div class="row">
    <div class="col-xs-4">
     <h3>Blood Donation benefits !</h3>
     <p>A study published in the Journal of the American Medical Association, found that participants ages 43 to 61 had fewer heart attacks and strokes when they donated blood every six months. In another study by the American Journal of Epidemiology, researchers found, in a sample size of 2,682 men in Finland, those who donated blood at least once a year had an 88 percent lower risk of heart attacks than those who did not donate.</p>
      

    </div>

<div class="vl"></div>

    <div class="col-xs-4">
      <h3>WHY Donating Blood..?</h3>
        <p>
          According to the American Red Cross, every two seconds someone is in need of blood. While the average blood cell transfusion is approximately 3 pints, donors usually provide 1 pint of blood per donation. A single car accident victim can require as many as 100 pints. 
        </p>
      
    </div>
<div class="vl2"></div>

    <div class="col-xs-4">
     <h3>About site</h3>
<p>Blood Bank Management System (BBMS) is a browser based system designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank and asisting patients needing blood to obtain donors which are ready to save a life.</p> 
    </div>


</div>
</div>
<h3 align="center">Copyright Gurus@ 2020.</h3>
</div>
<br>

</body>
</html>
