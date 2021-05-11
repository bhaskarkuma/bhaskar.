<!DOCTYPE html>
<html>
<head>
	<title>BHASKAR MOTOR</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<nav id="bhk" class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; width: 100%; z-index: 12; font-family: 'Amaranth', sans-serif;top: 0px;">
  <a class="navbar-brand" href="#"> <img style="width: 120px;" src="image/bkp.png"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <style>  
   #navbarSupportedContent a:hover{
    box-shadow: 0 0 5px #fff0,
               0 0 5px #fff;
   transition: 0.3s solid;
   color: white;

   }
   .main_div{
    width: 100%;
    height: 100%;
    position: relative;
    color: black;
    margin-bottom: 10px;
  }

  .box{
    margin: 0% 25%;
    width: 50vw;
    position: absolute;
    /*left: 33%;
    top: 75px;*/
    box-shadow: 0 0 5px #5B5A5A,
               0 0 5px #737373;
    padding: 50px;
    border-radius: 10px;
    color: black;
    font-family: 'Oswald', sans-serif;
  }

  
  .box .inputBox{
    position: relative;
    font-family: 'Oswald', sans-serif;
  }

  .box .inputBox input{
      width: 100%;
      padding: 5px;
      letter-spacing: 1px;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid black;
      background: transparent;
      outline: none;
      color: #305E07;
      font-family: 'Ubuntu', sans-serif;
      font-size: 14px;
  }
  .box .inputBox input:focus ~ label,
  .box .inputBox input:valid ~ label{
    top: -20px;
    left: 0;
    color: #03a9f4;
    font-size: 12px;

  }

  

  .box .inputBox label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 5px 0;
    font-size: 15px;
    transition: 0.5s;
    color: black;
    font-family: 'Oswald', sans-serif;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 8px 16px;
    border-radius: 5px;
    font-size: 15px;
    font-family: 'Oswald', sans-serif;

   
  }

  .box input[type="submit"]:hover{
    background: #035EF4;
    }


  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="item.php">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
              </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

    </ul>
   
  </div>
</nav>


  
  <!-- The slideshow -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin:0px;max-height: 500px;  border: 3px  solid #000000; box-shadow: 12px;margin-top: 70px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="all.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="brake.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="all.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="cablem.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="all.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="brakes.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="all.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tcable.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="all.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="con"><a class="vb" style="text-decoration: none; color:white ; position: fixed;z-index: 2;margin-bottom: 50%;background-color: #02C110;border-radius: 5px; top: 250px;line-height: 40px;width: 85px;align-items: center;font-size: 25px;" href="contact.php">Contact</a></div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div>
		<h2 class="text-center">About Us</h2>
	</div>
<div class="container-fluid">
 <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
    	<img src="image/m (4).jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    	<h2>I can help Everytime</h2>
    	<p class="py-3">Hellow do come in my website i always help you 
    	   every time do you like this site plese shere 
           and scrive my website tank you dsds bhg ssh</p>
           <a href="about.php" class="btn btn-success">Know more</a>
    </div>
 </div>
</div>
</section>

<section class="my-5">
	<div>
		<h2 class="text-center">Our Servies</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-mg-4 col-12">
				<div class="card">
                 <img class="card-img-top" src="image/m (5).jpg" alt="Card image">
                <div class="card-body">
                   <h4 class="card-title">Nature</h4>
                   <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
               </div>
			</div>
			<div class="col-lg-4 col-mg-4 col-12">
				<div class="card">
                 <img class="card-img-top" src="image/m (6).jpg" alt="Card image">
                <div class="card-body">
                   <h4 class="card-title">Nature</h4>
                   <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
               </div>
			</div>
			<div class="col-lg-4 col-mg-4 col-12">
				<div class="card">
                 <img class="card-img-top" src="image/m (7).jpg" alt="Card image">
                <div class="card-body">
                   <h4 class="card-title">Nature</h4>
                   <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
               </div>
			</div>
		</div>
	</div>

</section>
<section class="my-5">
	<div>
		<h2 class="text-center">Our Gallery</h2>
	</div>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-4 col-mg-4 col-12">
    			<img src="image/m (8).jpg" class="img-fluid pb-3">
    		</div>
    		<div class="col-lg-4 col-mg-4 col-12">
    			<img src="image/m (8).jpg" class="img-fluid pb-3">
    		</div>
    		<div class="col-lg-4 col-mg-4 col-12">
    			<img src="image/m (8).jpg" class="img-fluid pb-3">
    		</div>
    	</div>
    	
    </div>

</section>


<section class="my-5">
	<div>
		<h2 class="text-center">Subscribe</h2>
	</div>

	<div class="main_div">
  <div class="box">
    <form method="" action="">
    <div class="inputBox">
      <input type="text" name="username" autocomplete="off"required>
             <label> Username </label>
    </div>
    <div class="inputBox">
      <input type="Email" name="email" autocomplete="off"required>
             <label> Email </label>
    
    <input type="submit" name="" value="login"> 
    </form>
  </div>
</div>
	</section>
  
  
	



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>