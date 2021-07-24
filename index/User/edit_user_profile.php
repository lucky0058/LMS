<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-------------------------------------------Bootstrap link----------------------------------------------------------------------------------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!------------------------------------------Bootstrap scripts-------------------------------------------------------------------------------->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

  <!------------------------------------------External Stylesheet-------------------------------------------------------------------------------->
  <link rel="stylesheet" href="public/css/style.css">
  <!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
  <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>

  <title>E-Library</title>
  <style>
.form-container{
  width:450px;
  height:500px;
  margin:50px auto;
  padding:50px;
  background-color:rgba(250, 93, 93,0.5);
  text-align:center;
  border-radius:50px;
}
label{
  display:block;
  text-align:left;
  margin-left:10px;
}
input{
  width:300px;
  background-color:white;
}
.item{
  /* background-color:red; */
  width:300px;
  margin:20px auto;
}

.item a{
  text-decoration:none;
  margin:10px;
  padding: 10px;
  background-color:grey;
  color:white;
  border:none;
  border-radius:10px;
}
  </style>
</head>

<body>

<!---------------------------------Navbar---------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <h1 class="logo">E-Library</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-auto">

          
          <li class="nav-item">
              <h5>
                <a class="nav-link" href="logout.php">Logout</a>
              </h5>
          </li>

          
        </ul>
      </div>
    </div>
  </nav>

<h1 style="text-align:center">Welcome <?php echo $_SESSION['username']; ?></h1>

<!---------------------------------------------USer-profile-page------------------->
<div class="form-container">
    <form action="update_user_profile.php" method="post">
    <div class="item">
    <h2>Edit Profile</h2>
    </div>
    <div class="item">
    <label for="name">Name</label>
        <input id="name" type="text" name="name" value=<?php echo $_SESSION['username'] ?> >
    </div>
        <div class="item">
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value=<?php echo $_SESSION['email'] ?> >
        </div>
        
        <div class="item">
        <label for="mobile">Mobile</label>
        <input id="mobile" type="text" name="mobile" value=<?php echo $_SESSION['mobile'] ?> >
        </div>
        
  <div class="item">
  <button type="submit" >Update Profile</button>
  
  </div>
  
    </form>
</div>
  <!----------------------------------Footer------------------->
  <footer class="footer">
    <span>Copyrights @Team</span>
  </footer>


</body>

</html>

