<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Event Manager</title>
</head>

<body>

<!-- NAVBAR -->
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


<!-- PAGE BACKGROUND -->
<div class="container-fluid py-5"
style="background-image:url(v.jpg);
background-size:cover;
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;">


<!-- JOIN EVENT FORM -->
<div class="p-4"
style="max-width:600px;
width:100%;
border:groove;
border-color:#000;
background-image:url(v.jpg);
background-size:cover;
border-radius:10px;">


<form class="join-form">

<h2 class="text-center mb-4"
style="color:#003333;
font-size:30px;
font-family:Geneva, Arial, Helvetica, sans-serif;
font-style:italic;
font-weight:700">
JOIN EVENT
</h2>


<div class="mb-3">

<label class="form-label"
style="color:#E1E1FF;
font-size:20px;
font-family:'Courier New', Courier, monospace;
font-style:oblique;
font-weight:900">
Event Type
</label>

<select class="form-select"
style="background-color:#CCCCCC;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
font-weight:800;
font-style:italic">

<option>Conference</option>
<option>Workshop</option>
<option>Music Festival</option>
<option>Sports</option>

</select>

</div>


<div class="mb-3 row">

<div class="col">

<label class="form-label"
style="color:#E1E1FF;
font-size:20px;
font-family:'Courier New', Courier, monospace;
font-style:oblique;
font-weight:900">
Date
</label>

<input type="date" class="form-control"
style="background-color:#CCCCCC;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
font-weight:800;
font-style:italic">

</div>


<div class="col">

<label class="form-label"
style="color:#E1E1FF;
font-size:20px;
font-family:'Courier New', Courier, monospace;
font-style:oblique;
font-weight:900">
Time
</label>

<input type="time" class="form-control"
style="background-color:#CCCCCC;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
font-weight:800;
font-style:italic">

</div>

</div>


<div class="mb-3">

<label class="form-label"
style="color:#E1E1FF;
font-size:20px;
font-family:'Courier New', Courier, monospace;
font-style:oblique;
font-weight:900">
Location
</label>

<input type="text" class="form-control"
placeholder="Enter Venue / Location"
style="background-color:#CCCCCC;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
font-weight:800;
font-style:italic">

</div>


<button type="submit"
class="btn w-100"
style="background-color:#666699;
color:#CCFFFF;
font-family:'Times New Roman', Times, serif;
font-size:18px;
font-weight:600">

BOOK NOW

</button>

</form>

</div>
</div>


<!-- FOOTER -->
<div class="container-fluid bg-dark d-flex align-items-center position-relative" style="height:100px;">

<h1 class="text-light m-0">EVENTSTREAK</h1>

<h2 class="text-light m-0 position-absolute start-50 translate-middle-x">
copyrights@2025
</h2>

</div>

</body>
</html>
