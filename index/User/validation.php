 <!---------------------database connection------------------------------------>
 <?php
session_start();
////////////////////////////////////////////////////////////////////database connection////////////////////////////////////
$server= "localhost";
$username="root";
$password="";
$dbname= "lms";
$conn = mysqli_connect($server,$username,$password);
if(! $conn){
   die("could not connect".mysqli_error());
}
   else{
//        echo 'connected successfully';
   }


////////////////////////////////////////////////////////////////////database selection//////////////////////////////////////////////
$db_select = mysqli_select_db($conn,$dbname);
if(!$db_select)
{
 die('Can\'t use ' . $dbname . ': ' . mysqli_error());
}
else{
//  echo "HOLY EFF";
}


///////////////////////////////////////////////////////////////////insert values////////////////////////////////////////////////////
$email= $_POST['email'];
$password= $_POST['password'];


    $query = "select * from users where email = '$email' && password = '$password'";
    $result= mysqli_query($conn,$query);
     
        while($row = mysqli_fetch_assoc($result)){
            if($row['email']==$email){
               if($row['password']==$password) {
                   $_SESSION['username'] = $row['fullname'];
                   $_SESSION['email'] = $row['email'];
                   $_SESSION['mobile'] = $row['mobile'];
                   header("location:user_homepage.php");

                }else{
                    header("Location:user_signin.php");
                    echo "please fill in the correct details";
                }
               }
            }
      
            exit();

?>