<!DOCTYPE html>
 <html>
    <head>
      <title> </title> 
	  
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">

  
	  
</head>
<body>





<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SIMPLE WEBSITE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Best Scores</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Trophis</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Galary</a>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image\ms2.jpg" alt="WC11 winning shot">
    </div>
    <div class="carousel-item">
      <img src="image\ms1.jpg" alt="The sky is high">
    </div>
    <div class="carousel-item">
      <img src="image\ms3.jpg" alt="Century in White">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>



<section class="my-5">
<div class="py-5">
 <h2 class="text-center"> Register to get notified about MS Dhoni</h2>
   <div class="w-50 m-auto">
     <form action="userinfo.php" method="POST">
        <div class="form-group">
            <label> User name </label>
         <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
		<div class="form-group">
            <label> email </label>
         <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
		<div class="form-group">
            <label> comments </label>
         <textarea class="form-control" name="comments"></textarea>
        </div>
		<button type="submit" class="btn btn-success">Submit</button>
     </form>
    </div>
 </div>


</section>
<footer>
<p class="p-3 bg-dark text-white text-center">@MS Dhoni</p>
</footer>
</body>
</html>