<!-- 

// @include 'config.php';

// session_start();

// if(isset($_POST['submit'])){

//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
//    $user_type = $_POST['user_type'];

//    $select = " SELECT * FROM user_f WHERE email = '$email' && password = '$pass' ";

//    $result = mysqli_query($conn, $select);

//    if(mysqli_num_rows($result) > 0){

//       $row = mysqli_fetch_array($result);

//       if($row['user_type'] == 'admin'){

//          $_SESSION['admin_name'] = $row['name'];
//          header('location:admin_page.php');

//       }elseif($row['user_type'] == 'user'){

//          $_SESSION['user_name'] = $row['name'];
//          header('location:user_page.php');

//       }
     
//    }else{
//       $error[] = 'incorrect email or password!';
//    }

// };-->

<?php
//connecting to database
$servername="localhost";
$username="root";
$password="";
//create a connection
$conn = mysqli_connect($servername, $username, $password)
echo "connection was successful";

// if($_SERVER['REQUEST_METHOD']=='POST'){
//    $email=$_POST['email'];
//    $password=$_POST['password'];
// }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" id="submit" name="submit" value="login now" class="form-btn" onclick="open()">
      <p>don't have an account? <a href="register.html">register now</a></p>
      <!-- <script>
         function open(){
           document.getElementById("submit").innerHTML=<a href="user.html"></a>;
         }
         
       </script> -->
   </form>

</div>

</body>
</html>