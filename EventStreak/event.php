<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Event Manager</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand col-5" href="#"><img src="images.jpeg" height="100px" width="100px"/></a>
<a class="navbar-brand text-danger fw-bold" href="#" style="font-size:36px;">EventStreak</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link text-success me-3" href="login.php">Register/Login</a>
</li>
<li class="nav-item">
<a class="nav-link text-success me-3" href="add.php">Add Events</a>
</li>
<li class="nav-item">
<a class="nav-link text-success me-3" href="book.php">Join Events</a>
</li>
<li class="nav-item">
<a class="nav-link text-success me-3" href="con.php">Contact</a>
</li>
</ul>
</div>
</div>
</nav>

<div class="container-fluid p-0">
<div id="eveCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
<div class="carousel-indicators">
<button type="button" data-bs-target="#eveCarousel" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#eveCarousel" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#eveCarousel" data-bs-slide-to="2"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active position-relative">
<img src="d.jpg" class="d-block w-100" alt="e1"/>
<div class="carousel-caption-overlay"></div>
<div class="carousel-caption-custom caption-left">
<h1>HI!! Manage All Your Events in One Place</h1>
<p>Discover conferences, workshops, concerts, and college events — all organized for you.</p>
</div>
</div>
<div class="carousel-item position-relative">
<img src="c.jpg" class="d-block w-100" alt="e2"/>
<div class="carousel-caption-overlay"></div>
<div class="carousel-caption-custom caption-center">
<p>Missing event dates?<br />Late registrations?<br />Hard to keep track of upcoming events?</p>
</div>
</div>
<div class="carousel-item position-relative">
<img src="audience-1853662_1280.jpg" class="d-block w-100" alt="e3"/>
<div class="carousel-caption-overlay"></div>
<div class="carousel-caption-custom caption-center">
<p>Create, manage, and track events effortlessly with<span class="text-danger fw-bold">EventStreak</span></p>
<a href="reg.php" class="btn btn-danger btn-outline-warning text-dark fw-bold mt-2">REGISTER NOW</a>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#eveCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#eveCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>
</div>

<div class="container-fluid bg-dark d-flex align-items-center position-relative" style="height:100px;">

<h1 class="text-light m-0">EVENTSTREAK</h1>

<h2 class="text-light m-0 position-absolute start-50 translate-middle-x">
copyrights@2025
</h2>

</div>
</div>


</body>
</html>

