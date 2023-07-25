<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Warden Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://sites.google.com/mite.ac.in/cse/activities?authuser=0">
        <img src="toplogo.JPG" style="height:100px;width:100px" alt="CS">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#yashu" aria-controls="ashik" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="yashu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info w-100" href="index.php">Back</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
<h1 class="display-1 text-danger text-center text-uppercase mb-2">Enter Your Details</h1>


<div class="row justify-content-center">
    <form class="col-lg-8 col-md-10 col-sm-12 shadow-lg p-3" action="wardenphp.php" method="post">
        <div class="form group">
            <label for="regno">Warden ID-Number</label>
            <input type="text" name="regno" placeholder="Enter your id in nnn-nnn-nnn format" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" title="Input format must be in nnn-nnn-nnn" required>
        </div>
        <div class="form group">
            <label for="war_name">Name</label>
            <input type="text" name="name" placeholder="Enter your name here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" placeholder="Enter your address here"></textarea>
        </div>
        <div class="form group">
            <label for="contact">Phone Number</label>
            <input type="phone" name="contact" placeholder="Enter your contact number here" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Input format is only upto 10 digit numbers" required>
        </div>
        <div class="form group">
            <label for="email">Email Id</label>
            <input type="email" name="email" placeholder="Enter your email id here" class="form-control" pattern="[a-z0-9]+@gmail.com" title="Input is only as {abc}@gmail.com" required>
        </div>
        <div class="form-checked">
            <div class="form-inline">
            <label for="gender" class="col">Select Gender</label>
                <input type="radio" name="gender" value="male"  required>Male
                <input type="radio" name="gender" value="female" required>Female
                <input type="radio" name="gender" value="transgender" required>Transgender
            </div>
        </div>
        <div class="form group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter your username here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password here" class="form-control" required>
        </div>

        <div class="mt-3 row justify-content-center">
            <button class="col-4 btn btn-outline-primary" type="submit" href="index.php">Submit</button>
            
        </div>
    </form>
</div>
</div>
</body>
</html>
