<?php
    include 'connection.php';

    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>ONLINE VOTING SYSTEM</title>
  </head>
  <body>
   


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ONLINE VOTING SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
     
           
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> &nbsp;
      
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
  REGISTER
</button>
      
      <!-- registration modal -->
      <!-- Button trigger modal -->
      

     <!-- Button trigger modal -->
     <!-- Modal registration form -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >REGISTER HERE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
      <div class="modal-body">
      <form action = "register.php" method ="POST"> 
      <div class="form-group">
    <label for="exampleInputPassword1">Name</label>   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;
    <input type="text" class="form-control" id="nameofuser" name="nameo">
  </div> <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>  &nbsp; &nbsp;
    <input type="email" class="form-control" name="emailo" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Your user name will be your email address.</small>
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
    <input type="password" name="passwordo" class="form-control" id="exampleInputPassword1">
  </div><br>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
      </div>
      
    </div>
  </div>
</div>
    </form>
  </div>
</nav>
</div>
</div>

<div class="jumbotron" style="width:50%;margin-left:350px; margin-top:50px; background-color:blanchedalmond;" >
<div class="alert alert-warning" role="alert" STYLE="TEXT-ALIGN:CENTER;">
<H2>ONLY 18+ ONES CAN VOTE</H2>
</div>
  <h1 class="display-4">ONLINE VOTING SYSTEM</h1>
  <form action ="login.php" method ="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!--eligibility check-->
<div class="container">
<!-- Button trigger modal -->

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>