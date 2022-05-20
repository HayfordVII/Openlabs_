<?php

include 'config.php';
session_start();
$usersid = $_SESSION['usersid'];

if(!isset($usersid)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($usersid);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="download.png" type="image/x-icon">
    
</head>
<body> 
   <header >   
      <div class="container">
         <nav class="nav">
            <a href="#home" class="nav_logo"><img src="imgs/Openlabs-min.png" alt="" height="70px"></a>
            <link rel="stylesheet" href="header.css">
            <div class="navbar__toggle mt-2" id="mobile-menu">
               <span class="bar"></span>
               <span class="bar"></span>
               <span class="bar"></span>	
            </div>
               

         <ul class="nav-list">
            <li>
               <a href="home-emp.php" class="nav-link">Home</a>
            </li>
            <li>
               <a href="home-emp.php#services" class="nav-link">Services</a>
            </li>
            <li> 
               <a href="home-emp.php#carrer" class="nav-link">Carrer Path</a>
            </li>
            <li>
               <a href="home-emp.php#about" class="nav-link">About Us</a>
            </li>
            <li>
               <a href="home-emp.php#contact" class="nav-link">Contact</a>
            </li>
         </ul>
        <div class="header_right_2" style="border-left: 1px solid grey;">
          <div class="nav_link">
            <div class="nav_icon">
            <?php
                  $select = mysqli_query($conn, "SELECT * FROM `users` WHERE userId = '$usersid'") or die('query failed');
                  if(mysqli_num_rows($select) > 0){
                     $fetch = mysqli_fetch_assoc($select);
                  }
                  if($fetch['userBanner'] == ''){
                     echo '<img src="images/default-avatar.png" style="height:30px;object-fit: contain;border-radius:50px; ;>';
                  }else{
                     echo '<img src="uploaded_img/'.$fetch['userBanner'].' style="height:30px;object-fit: contain;border-radius:50px; ">';
                  }
               ?>
              
            <div class="nav_text dropdown drop">
              <i class="bi bi-caret-down-fill dropdown" style="font-size: 1rem  !important; float: center;"></i>
              <div class="dropdown-content">
                  <div class="dropdown_profile">
                     <div class="dropdown_profile_info" style="padding-left:10px;">
                        <div class='act_title'>
                          <a href=''><?php echo $fetch['userName']; ?></a>
                        </div>
                        <div class='acoount_name'>
                          <a href=''><?php echo $fetch['userCourse']; ?></a>
                        </div>    
                     </div>
                  </div>
                  <div class="profile_view_button">
                      <a href="home.php">View profile</a> 
                  </div>
                  <div class="bdr_bottom"></div>
                  <div class="title" style="color:black;">Account</div>
                  <div class="list"><a href="messages">Messages</a></div>
                  <div class="list"><a href="notifications">Notifications</a></div>
                  <div class="list"><a href="log-in/logout.inc.php">Log out</div></a>
                </div>
              </div>


   </div>

      </div>
             </div>


           </div>
       </nav>
     </div>
   </header>