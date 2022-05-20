<?php
    include_once 'header.php';
?>

<link rel="stylesheet" href="css/intern.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


<section class="hero" id="home">
    <style>
    .hero{
        width: 100%;
        height: 20vh;
        background: url("imgs/navbar.jpg") center no-repeat;
        background-size: cover;
        position: relative;
    }
    </style>
</section>




    <section class="services " id="services" >
        <div class="max-width">
            <h2 class="title">GRAPHIC DESIGN</h2>
        </div>
    </section>

    <div class="container">
             <div class="alert alert-primary" role="alert">
                Work at home
              </div>
        
              <div class="alert alert-success" role="alert">
                Must be present there
              </div>
              <div class="alert alert-danger" role="alert">
                Both are allowed
              </div>
        </div>

    
    <!-- FOR EMPLOYERS -->

    <?php
    if  ($fetch['userName'] == 'Employer') {?>
        <section class="container">
            <div class="intern-section">
            <?php
            $query = "SELECT * FROM users WHERE userType = 'Intern' AND userCourse ='Graphic Design';";
            $query_run = mysqli_query($conn, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;
            if ($check_faculty) {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                       <?php
                        if  ($fetch['userWorkstation'] == 'Home') {?>
                            <div class="profile-box mt-3" style ="background: #53C5F2;">
                        <?php } else if($fetch['userWorkstation'] == 'Office') {?>
                            <div class="profile-box mt-3" style ="background:  #86C664;">
                        <?php } else if($fetch['userWorkstation'] == 'Both') {?>   
                            <div class="profile-box mt-3" style ="background: #FF5A5A;">
                        <?php } ?> 
                        <?php   
                            if($fetch['userPic'] == ''){
                                echo '<img src="images/default-avatar.png" class="profile-pic" style="height:30px;object-fit: contain;border-radius:50px; ;>';
                            }else{
                                echo '<img src="uploaded_img/'.$fetch['userPic'].' class="profile-pic" style="height:30px;object-fit: contain;border-radius:50px; ">';
                            }
                            ?>
                       
                                <h3><?php echo $row['userName']; ?></h3>
                                <p><?php echo $row['userCourse']; ?> , <?php echo $row['userLocation']; ?>.</p>
                                <div class="social-media">
                                    <a href="<?php echo $row['userGitlink']; ?>"><i class="bi bi-telegram"></i></a>
                                    <a href="<?php echo $row['userLinkedin']; ?>"><i class="bi bi-linkedin"></i></a>
                                    <a href="<?php echo $row['userTelegram']; ?>"><i class="bi bi-github"></i></a>
                                </div>
                                <button type="button">Download CV</button>
                                <div class="profile-bottom">
                                    <p>Learn more about my Profile</p>
                                    <a href="home.php"><i class="bi bi-arrow-down"></i></a>
                                </div>
                            </div>    
                    <?php      
                }
            } else {
                echo "No Clients Found";
            };
            ?>
            </div>
        </section>

    
    <?php } else { ?>    
    <!-- For Interns -->
        <link rel="stylesheet" href="css/pages.css">  
        <section id="CyberSection">
            <?php
            $query = "SELECT * FROM users WHERE userType ='Employer' AND userCourse ='Graphic Design';";
            $query_run = mysqli_query($conn, $query);

            $check_faculty = mysqli_num_rows($query_run) > 0;

            if ($check_faculty) {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <?php
                        if  ($fetch['userWorkstation'] == 'Home') {?>
                            <div class="profile-box mt-3" style ="background: #53C5F2;">
                        <?php } else if($fetch['userWorkstation'] == 'Office') {?>
                            <div class="profile-box mt-3" style ="background:  #86C664;">
                        <?php } else if($fetch['userWorkstation'] == 'Both') {?>   
                            <div class="profile-box mt-3" style ="background: #FF5A5A;">
                        <?php } ?>   

                            <?php   
                            if($fetch['userPic'] == ''){
                                echo '<img src="images/default-avatar.png" class="profile-pic" style="height:30px;object-fit: contain;border-radius:50px; ;>';
                            }else{
                                echo '<img src="uploaded_img/'.$fetch['userPic'].' class="profile-pic" style="height:30px;object-fit: contain;border-radius:50px; ">';
                            }
                            ?>
                               </div>
                               <div class="col-md-8">
                                   <h2 class="card-title mt-2"><?php echo $row['userName']; ?></h2>
                                   <h6><?php echo $row['userLocation']; ?></h6>
                                   <p><?php echo $row['userBio']; ?></p>
                                   <a href="home.php"><button class="btn-1">Contact Us</button></a>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php      
                }
            } else {
                echo "No Clients Found";
            };
            ?>
        </section>
    <?php } ?>

        
<!-- footer section -->
<?php
    include_once 'footer.php';
?>