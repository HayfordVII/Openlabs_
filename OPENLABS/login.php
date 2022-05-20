<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pwd = mysqli_real_escape_string($conn, md5($_POST['pwd']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE userEmail = '$email' AND userPwd = '$pwd'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['usersid'] = $row['userId'];
      header('location: home-page.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="script.js" defer></script>
    
    <title>Log In</title>

   <!-- custom css file link  -->
   

</head>
<body>
   
<div class="form-container">

   <form action="" class="form" method="post" enctype="multipart/form-data">
      <h1 class="text-center">Log In</h1>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
         <div class="form-step form-step-active">
            <div class="input-group">
               <label for="username">Username</label>
               <input type="email" name="email" id="username" placeholder="Username/Email" required/>
            </div>
         <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="pwd" id="password"   required/>
         </div>
         <div class="btns-group">
              <input type="submit" name="submit" value="Submit" class="btn" />
         </div>
      <p>don't have an account? <a href="register.php">regiser now</a></p>
   </form>

</div>

</body>
</html>