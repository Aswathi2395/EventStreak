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
background-attachment:fixed;">


<!-- CONTACT FORM -->
<div class="container d-flex justify-content-center">

<div class="p-4"
style="max-width:600px;
width:100%;
border:groove;
border-color:#000;
background-image:url(v.jpg);
background-size:cover;
border-radius:10px;">

<h2 class="text-center mb-4" style="color:#003333; font-size:30px; font-family:Geneva, Arial, Helvetica, sans-serif; font-style:italic; font-weight:700">Contact Us</h2>

<form class="contact-form">

<div class="mb-3">
<label class="form-label" style="color:#E1E1FF; font-size:20px; font-family:'Courier New', Courier, monospace; font-style:oblique; font-weight:900">Name</label>
<input type="text" class="form-control" placeholder="Name" required style="background-color:#CCCCCC; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:800; font-style:italic" />
</div>

<div class="mb-3">
<label class="form-label" style="color:#E1E1FF; font-size:20px; font-family:'Courier New', Courier, monospace; font-style:oblique; font-weight:900">Email</label>
<input type="email" class="form-control" placeholder="Email" required style="background-color:#CCCCCC; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:800; font-style:italic"/>
</div>

<div class="mb-3">
<label class="form-label" style="color:#E1E1FF; font-size:20px; font-family:'Courier New', Courier, monospace; font-style:oblique; font-weight:900">Mobile No</label>
<input type="tel" class="form-control" placeholder="Number" required style="background-color:#CCCCCC; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:800; font-style:italic"/>
</div>

<div class="mb-3">
<label class="form-label" style="color:#E1E1FF; font-size:20px; font-family:'Courier New', Courier, monospace; font-style:oblique; font-weight:900">Message</label>
<textarea class="form-control" rows="4" placeholder="Write your message here" style="background-color:#CCCCCC; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:800; font-style:italic"></textarea>
</div>

<button type="submit" class="btn w-100" style="background-color:#666699; color:#CCFFFF; font-family:'Times New Roman', Times, serif; font-size:18px; font-weight:600">Send Message</button>

</form>

</div>
</div>


<!-- MAP SECTION -->
<div class="container text-center mt-5">

<h3 class="text-center mb-3" style="color:#333333; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:50px; font-weight:800; font-style:italic">Our Location</h3>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7772.292476271724!2d80.28303314161963!3d13.089916948945582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f4e1f59d751%3A0x4967889b11bee37!2sParry's%20Corner%2C%20George%20Town%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1767167540287!5m2!1sen!2sin"
width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<p class="text-light mt-2">9, Parrys Corner, Chennai</p>

</div>


<!-- CONTACT DETAILS -->
<div class="container text-left mt-4" style="color:#CCCCCC; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:18px; font-style:italic; font-weight:700">

<h4>Get In Touch</h4>

<p><i class="fa-solid fa-phone"></i> +91 95973771995</p>

<p><i class="fa-solid fa-message"></i> abc@gmail.com</p>

<h4 class="mt-4">Follow Us</h4>

<p>Instagram <i class="fa-brands fa-instagram"></i></p>

<p>Twitter <i class="fa-brands fa-twitter"></i></p>

<p>Facebook <i class="fa-brands fa-facebook"></i></p>

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
