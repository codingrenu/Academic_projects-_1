<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodcarenetwork | About page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
       
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
       
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Login/Register<span class="sr-only">(current)</span></a>
       
      </li>
     
    </ul>
 
  </div>
</nav>

<div class="jumbotron">
  <h1>Anytime!</h1>
  <p>We are always here to help you!</p>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div>
  <p class="text-center bg-dark text-white">Renu Vijay.V - +91-9003944506, Kit.24.22mmc041@gmail.com<br>Prabhu.S - +91-9380073437, prabhu@gmail.com<br>Pranav.B - +91-9110342158, pranav@gmail.com<br>Gokul.M - +91-7036739735, Gokul@gmail.com<br>Govind Sharma.H - +91-8374827408, GovindSharma@gmail.com
  </p>
  <a href="contact.php"> </a>
</div>
</section>
<?php require 'footer.php'; ?>
</body>
</html>