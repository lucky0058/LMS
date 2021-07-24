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
    <div class="container">
<!---------------------------------------------Navbar------------------------------------------------------------------------------------------------>
        <nav class="navbar fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="logo">E-Library</h1>
        </nav>
<!---------------------------------------------user registration box -------------------------------------------------------------------------------------------->      
        <div class="page-container">
           
            <img src="Images/user-signin-page-image2.png" alt="user-signup image" width="100%" height="100%">
            <div class=" signin-signup-form-container user-signup-form-container">
                <form action="user_register.php" method="post" class="signin-signup-form user-signup-form">
                    <h2 class="heading">User Registration</h2>
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Email ID:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Mobile Number:</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Address:</label>
                    <textarea rows="3" cols="40" class="form-control" name="address"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                </form>

                
               
            </div>
           
    </div>

    </div>
<!-----------------------------------------------Footer---------------------------------------------------------------------------------------------------->
    
    <footer class="footer">
        <span>Copyrights @ Team</span>
    </footer>

    

   
</body>

</html>
