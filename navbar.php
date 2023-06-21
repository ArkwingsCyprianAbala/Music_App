<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<<<<<<< HEAD
	<title>HomePage</title>
=======
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<title>HomePage</title>
	<style type="text/css">
		.nav-link{
			width: 70px;
			height: 60px;
			text-align: center;
			text-decoration: none;
			color: #000;
			box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.05);
			border-radius: 50%;
			position: relative;
			overflow: hidden;
			transition: transform 0.5s;
		}
		.nav-link .fa{
			position: relative;
			z-index: 10;
			transition: color 0.5s;
		}
		.nav-link::after{
			content: '';
			width: 100%;
			height: 100%;
			top: -90px;
			left: 0;
			background: linear-gradient(-45deg, #e91e80, #e91e80);
			position: absolute;
			transition: 0.5s;
		}
		.nav-link:hover::after{
			top: 0;
		}
		.nav-link:hover .fa{
			color: black;
		}
		.nav-link:hover{
			transform: translateY(-10px);
		}
	</style>
>>>>>>> 007d896 (second commit)
</head>
<body class="bg-dark">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
<<<<<<< HEAD
	    <a class="navbar-brand fw-bold" class="app-title" href="home.php">onthemove</a>
=======
	    <a class="navbar-brand fw-bold" class="app-title" href="themove.php">onthemove</a>
>>>>>>> 007d896 (second commit)
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
	        <li class="nav-item mx-3">
<<<<<<< HEAD
	          <a class="nav-link" aria-current="page" href="home.php">Home</a>
	        </li>
	        <li class="nav-item mx-3">
	          <a class="nav-link" href="aboutus.php">About Us</a>
	        </li>
	        <li class="nav-item mx-3">
	          <a class="nav-link" href="contact.php">Contact Us</a>
=======
	          <a class="nav-link" aria-current="page" href="home.php"><i class="fa fa-home" aria-hidden='true'></i></a>
	        </li>
	        <li class="nav-item mx-3">
	          <a class="nav-link" href="aboutus.php"><i class="fa fa-info" aria-hidden='true'></i></a>
	        </li>
	        <li class="nav-item mx-3">
	          <a class="nav-link" href="contact.php"><i class="fa fa-inbox" aria-hidden='true'></i></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="music.php"><i class="fa fa-music" aria-hidden='true'></i></a>
>>>>>>> 007d896 (second commit)
	        </li>
	      </ul>
	      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
	        <li class="nav-item">
<<<<<<< HEAD
	          <a class="nav-link" aria-current="page" href="artists.php">Artists</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="#">Genre</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="music.php">Playlists</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="logout.php">LogOut</a>
=======
	          <a class="nav-link" aria-current="page" href="music.php"><i class="fa fa-music" aria-hidden='true'></i></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="logout.php"><i class="fa fa-sign-out" aria-hidden='true'></i></a>
>>>>>>> 007d896 (second commit)
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

</body>
</html>