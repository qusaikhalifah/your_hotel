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
			
 	$prudect=$prudect."<img  class='img-fluid rounded' src='".$row["pic"]."'>
			";
	
}}}
	
	
	?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The hotel</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div  class="container">
        <a class="navbar-brand" href="home.php" style="color:#42b97c;"><b>Your Hotel</b></a>
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

    <!-- Page Content -->
    <div style="padding-top:1em;" class="container">

      <!-- Page Heading/Breadcrumbs -->
      

      <ol  class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home 2</li>
      </ol>

      <div  class="row">

        <!-- Post Content Column -->
        <div  class="col-lg-8">
          <!-- Preview Image -->
         <?echo $prudect;?>
          <hr>

          <!-- Date/Time -->

          <hr>

          <!-- Post Content -->

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <div class="media-body">
              
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <div class="media-body">
             
            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          
          <!-- Side Widget -->
         

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
