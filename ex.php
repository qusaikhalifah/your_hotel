<?php
$hotelname=$_POST["HotelName"];
$place=$_POST["place"];
$descr=$_POST["descr"];
$catid=$_POST["catid"];
$price=$_POST["price"];
$pic=$_POST["pic"];
$servername="localhost";
$username="root";
$password="";
$db="store";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	echo "not conncted".connect_error;
}
else{
		
	$sql4="SELECT * FROM prodect";
		$prudect="";
	$rsult=$conn->query($sql4);
	if($rsult->num_rows>0){
		while($row=$rsult->fetch_assoc()){
			if($row["price"]>100){
$prudect=$prudect."
        <div style='height:70%;' class='col-lg-4 col-sm-6 portfolio-item'>
        <div  class='card h-100'>
		<a href='#'><img   class='card-img-top' src='".$row["pic"]."' alt=''></a>
        <div class='card-body'>
        <h4 class='card-title'>
        <a href='#'>".$row["HotelName"]."</a>
       </h4>
	   <h5 style='margin-top:-2em; margin-left:12em;'>".$row["place"]."</h5>
	   <h3 style=''>".$row["price"]."</h3>
        <p class='card-text'>".$row["descr"]."</p>
        </div>
        </div>
		</div>
		  ";}
		}
	}}
		
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Your Hotel</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div  class="container">
        <i style=" color:#bbbbbb;  padding-right:0.5em; font-size:30px;"  class="fas fa-h-square"></i><a class="navbar-brand" href="home.php" style="color:#42b97c;"><b>Your Hotel</b></a>
		<link rel="shortcut icon" href="HotelIcon.png" type="image/x-icon" />

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" id="navbarResponsive">
          <ul   class="navbar-nav ml-auto">
            <li class="nav-item">
			
			 <li   class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Hotels
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="sh.php">Cheap</a>
				 <a class="dropdown-item" href="ex.php">Expensive</a>
              </div>
            </li>
            <li class="nav-item dropdown">
         

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="about.html">About</a>
				<a class="dropdown-item" href="contact.html">Contact</a>
              </div>
            </li>
            <li class="nav-item dropdown">
         
    </nav>

    <header>
      <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div  class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('bay-beach-blue-944463.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color:#42b97c;" ></h3>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('architecture-blue-water-buildings-261102.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color:#42b97c;"></h3>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('architecture-carpet-chandeliers-573552.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color:#42b97c;" ></h3>
            </div>
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
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"></h1>

      <!-- Marketing Icons Section -->
     
      <!-- /.row -->

      <!-- Portfolio Section -->
      	    <div  class='row'>

<?echo $prudect;?>
   </div>
        
      <!-- /.row -->

      <!-- Features Section -->
      
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p></p>
        </div>
        <div class="col-md-4">
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">yourhotel@gmail.com</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
