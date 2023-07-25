<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>DORMITORY MANAGEMENT SYSTEM</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="validatefunction.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <img src="toplogo.JPG" style="height:200px;width:200px;" class="col-lg-2 col-md-6">
        <h1 class="col-lg-10 col-md-6 text-center align-self-center text-uppercase text-danger" style="font-family:Algerian">DORMITORY MANAGEMENT SYSTEM</h1>
    </div>
    
    <div class="row">
        <div id="yashu" class="col-lg-8 col-md-6 col-sm-12 carousel slide carousel-fade p-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#yashu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#yashu" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#yashu" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#yashu" data-bs-slide-to="1" aria-label="Slide 1"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="p2.jpg" style="height:400px" class="d-block w-100" alt="About department">
            </div>
            
            <div class="carousel-item">
              <img src="mite.jpeg"style="height:400px" class="d-block w-100" alt="praise">
            </div>
            <div class="carousel-item">
              <img src="court.jpeg"style="height:400px" class="d-block w-100" alt="court">
            </div>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#yashu" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#yashu" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            
          </button>
        </div>
        
        <!--primary=blue, success=green, info=skyblue, warning=yellow, danger=red, light=white, dark=black, secondary=grey-->
        <form class="col-lg-4 col-md-6 col-sm-12 shadow-lg p-4 align-self-center " action="loginphp.php"  method="post" >
            <h1 class="text-center text-success display-6" style="font-family:Algerian">WARDEN LOGIN</h1>
            <div class="form group">
                <label for="user">Email-id</label>
                <input type="email" name="Email" id="email-id" placeholder="Enter the username" class="form-control"  required>
            </div>
            <div class="form group">
                <label for="passkey">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter the Password" class="form-control" required >
            </div>
            <div class="mt-3 row justify-content-around">
                <button class="col-4 btn btn-outline-danger" name="login" type="submit" onclick="validatefunction(submit)">Login </button>
                <button class="col-4 btn btn-outline-warning"type="cancel">Cancel</button>
            </div>
            </form>
            <div>
                <a href="Warden.php"> <button class="btn btn-outline-dark w-100"  style=position:relative;margin-top:15px type="submit"> 
                  Register
                </button></a>
            </div>

        
    </div>
    
</div>
<footer>
  &#169;Developed by Yashwanth.S
</footer>
</body>
</html>