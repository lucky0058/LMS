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

<!------------------------------------------External Stylesheet-------------------------------------------------------------------------------->
    <link rel="stylesheet" href="public/css/style.css">
<!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
    <title>E-Library</title>
</head>

<body>
<!---------------------------------------------Navbar------------------------------------------------------------------------------------------------>
        <nav class="navbar fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="logo">E-Library</h1>
        </nav>

<!---------------------------------------------Sign in box -------------------------------------------------------------------------------------------->      
        <div class="admin-signin-container">
           
            <img src="Images/admin-login-page.jpg" alt="admin-page-image" width="100%" height="100%">
            <div class="signin-signup-form-container admin-signin-form-container">
                <form action="admin_dashboard.php" method="post" class="signin-signup-form">
                    <h2 class="heading">Welcome Admin!</h2>
                    <div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>
            </div>

           
    </div>


    <?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms2");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								header("Location:admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>


 
<!-----------------------------------------------Footer---------------------------------------------------------------------------------------------------->
    
    <footer class="footer">
        <span>Copyrights @ Team</span>
    </footer>
</body>

</html>