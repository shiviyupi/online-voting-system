<?php
session_start();
include 'connection.php';

?>

<?php 
echo '<div class="alert alert-success" role="alert"> Congratulations !   '.$_SESSION['email'].' You are logged in..
</div>';
?>

<!doctype html>
<html lang="en">
  <head>
  <style>
  
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>after login</title>
  </head>
  <body>
    <div class=" container">
   
    <div class="card" style="width: 18rem;  margin-left:85px ; margin-right:0px ;display:inline-block; margin-top:10px;">
  <img src="images\modi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NARENDRA MODI</h5>
    <P  class="card-text"> BHARTIYA JANTA PARTY</P>
      
    <a href="votesubmit.php " class="btn btn-primary">  VOTE HERE</a>
  </div>
</div>
<div class="card" style="width: 18rem;  margin-left:85px ; margin-right:0px ; margin-top:10px; display:inline-block;">
  <img src="images\rahul.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">RAHUL GANDHI</h5>
    <p class="card-text"> CONGRESS</p>
    <a href="rahulgandhi.php" class="btn btn-primary">VOTE HERE</a>
  </div>
</div>
<div class="card" style="width: 18rem;  margin-left:85px ; margin-right:0px ; margin-top:10px;display:inline-block;">
  <img src="images\yogi ji.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">YOGI ADITYANATH</h5>
    <p class="card-text">BHARTIYA JANTA PARTY</p>
    <a href="modi.php" class="btn btn-primary">VOTE HERE</a>
  </div>
</div>

<div class="card" style="width: 18rem;  margin-left:85px ; margin-right:0px ; margin-top:10px; display:inline-block;">
  <img src="images\arvind.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ARVIND KEJRIWAL</h5>
    <p class="card-text">AAM ADMI PARTY</p>
    <a href="aap.php" class="btn btn-primary">VOTE HERE</a>
  </div>
</div>
<div class="card" style="width: 18rem;  margin-left:85px ;  margin-top:10px; margin-right:0px ; display:inline-block;">
<img src="images\mayawati.jpg" class="card-img-top" alt="...">  
<div class="card-body">
    <h5 class="card-title"> MAYAWATI</h5>
    <p class="card-text">BAHUJAN SAMAJ PARTY</p>
    <a href="mayawati.php" class="btn btn-primary">VOTE HERE</a>
  </div>
</div>
<div class="card" style="width: 18rem;  margin-left:85px ; margin-right:0px ; display:inline-block;margin-top:10px;">
  <img src="images\aki.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">AKHILESH YADAV</h5>
    <p class="card-text">SAMAJWADI PARTY.</p>
    <a href="aki.php" class="btn btn-primary">VOTE HERE</a>
  </div>
</div>
     </tr>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>

