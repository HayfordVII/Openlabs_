<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $uid = mysqli_real_escape_string($conn, $_POST['uid']);
   $course =  mysqli_real_escape_string($conn, $_POST['course']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $location = mysqli_real_escape_string($conn, $_POST['location']);
   $workstation = mysqli_real_escape_string($conn, $_POST['workstation']);
   $pwd = mysqli_real_escape_string($conn, md5($_POST['pwd']));
   $pwdrepeat = mysqli_real_escape_string($conn, md5($_POST['pwdrepeat']));
   $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
   $bio = mysqli_real_escape_string($conn, $_POST['bio']);
   $gitlink = mysqli_real_escape_string($conn, $_POST['gitlink']);
   $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
   $telegram = mysqli_real_escape_string($conn, $_POST['telegram']);
   $banner = $_FILES['banner']['name'];
   $image_size = $_FILES['banner']['size'];
   $image_tmp_name = $_FILES['banner']['tmp_name'];
   $image_folder = 'uploaded_img/'.$banner;

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE userEmail = '$email' AND userPwd = '$pwd'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pwd != $pwdrepeat){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `users`(userName, userUid, userCourse, userPhone, userEmail, userLocation, userWorkstation, userPwd, userType, userBanner, userPic, userBio, userGitlink, userLinkedin, userTelegram) VALUES('$name', '$uid', '$course', '$phone', '$email', '$location', '$workstation', '$pwd', '$usertype', '$banner', '$pic', '$bio', '$gitlink', '$linkedin', '$telegram')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
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
    <script src="js/script.js" defer></script>
    
    <title>SIGN UP|EMPLOYER</title>
  </head>
  <body>
    <section>
   
<div class="form-container">

   <form action="" method="post" class="form" enctype="multipart/form-data">
      <h1 class="text-center">Sign Up</h1>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      
      <div class="progressbar">
          <div class="progress" id="progress"></div>

          <div class="progress-step progress-step-active" data-title="Intro"></div>
            
            
          
          <div class="progress-step" data-title="Contact"></div>
          <div class="progress-step" data-title="Location"></div>
          <div class="progress-step" data-title="Password"></div>
          <div class="progress-step" data-title="Profile"></div>


          

        </div>

        <!-- Steps -->
        <div class="form-step form-step-active">
          <div class="input-group">
            <label for="username">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="uid" id="username" />
          </div>
          <div class="input-group">
            <label for="position">Course</label>
            <select name = "course">
              <option></option>
              <option>Cybersecurity</option>
              <option>Data Science</option>
              <option>Graphic Design </option>
              <option>Networking</option>
              <option>Software Dev </option>
              <option>Web Dev</option>
            </select>
          </div>
          <div class="">
            <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            <p>already have an account? <a href="login.php">login now</a></p>
          </div>

          
        </div>

        <!-- 2nd Step -->
        <div class="form-step">
          <div class="input-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
        </div>

        <!-- 3rd Step -->
        <div class="form-step">
          <div class="input-group">
            <label for="">Location </label>
            <input type="text" name="location" id="Location" placeholder="Town, City, Region"/>
          </div>
          <div class="input-group">
            <label for="workstation">WorkStation</label>
            <select name="workstation">
              <option></option>
              <option>Home</option>
              <option>Office</option>
              <option>Both</option>
            </select>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
        </div>

        <!-- 4th Step -->
        <div class="form-step">
          
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="pwd" id="password" />
          </div>
          <div class="input-group">
            <label for="confirmPassword">Confirm Password</label>
            <input
              type="password"
              name="pwdrepeat"
              id="confirmPassword"
            />
          </div>
          <div class="input-group">
            <label for="position">User Type</label>
            <select name="usertype">
              <option></option>
              <option>Employer</option>
              <option>Intern</option>
            </select>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
            
          </div>
        </div>
        
        <div class="form-step">
          <div class="input-group">
            <label for="">Banner And Profile Picture</label>
            <input type="file" name="banner" class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="file" name="banner" class="box" accept="image/jpg, image/jpeg, image/png">
          </div>
          <div class="input-group">
            <label for="workstation">Bio </label>
            <input type="text" name="bio" id="" placeholder=""/>

          </div>
          <div class="input-group">
            <label for="workstation">Socials </label>
            <input type="text" name="gitlink" id="gitlink" placeholder="Github"/>
            <input type="text" name="linkedin" id="gitlink" placeholder="LinkedIn"/>
            <input type="text" name="telegram" id="gitlink" placeholder="Telegram"/>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            
            <input type="submit" name="submit" value="Submit" class="btn" />
            
          </div>
        </div>
        

      
   </form>

</div>

</body>
</html>