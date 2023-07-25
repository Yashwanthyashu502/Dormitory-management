<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home | DORMITORY MANAGEMENT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://mite.ac.in/hostel/">
      <img src="toplogo.JPG" style="height:100px;width:100px" alt="CS">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#yashu" aria-controls="yashu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="yashu">
      <ul class="navbar-nav ms-auto">
        <!--li class="nav-item pe-2">
          <a class="btn btn-outline-info active w-100 pe-2" href="#">Home</a>
        </li-->
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="NewStudent.php">New Student</a>    
        </li>
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="display.php">Student-List</a>
        </li>
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="Payment.php">Payment</a>
        </li>
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="Rooms.php">Rooms</a>
        </li>
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="complaint.php">Complaint</a>
        </li>
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="index.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid mt-4">
<div id="yashu" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#yashu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#yashu" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#yashu" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#yashu" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#yashu" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#yashu" data-bs-slide-to="1" aria-label="Slide 1"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="miteb.jpg" style="height:500px" class="d-block w-100" alt="slide one">
    </div>
    <div class="carousel-item"  >
      <img src="MIT4 4.jpg" style="height:500px" class="d-block w-100" alt="slide two">
    </div>
    <div class="carousel-item"  >
      <img src="miteg.jpg" style="height:500px" class="d-block w-100" alt="slide three">
    </div>
    <div class="carousel-item"  data-bs-interval="1000">
      <img src="p2.jpg"style="height:500px" class="d-block w-100" alt="slide four">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#yashu" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#yashu" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</body>
</html>
