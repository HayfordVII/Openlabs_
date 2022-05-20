
<?php
include_once 'header.php';
?>



<link rel="stylesheet" href="css/editp.css">


    <link rel="stylesheet" href="css/mainbody.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">

    <section class="hero" id="home">
       

    </section>

<div class="mainbody">
    <div class="sidebar" style="border:none;">
        
           <div class="sidebar_first_col">
            <div class="profile_header" style="border-top-left-radius: 10px;border-top-right-radius:10px;"></div>
            <img src="../people.svg" alt="noimage" style="height:80px;
                width:80px;
                border-radius: 50%;
                border:4px solid white;
                
                margin:-35px auto 0 auto;" >
            
            <div class="profile_info">
                <p style="text-align: center;" class="act_title"><?=$_SESSION['course']?></p>
                <p class="account_name"><?=$_SESSION['course']?></p>
            </div>
            
            <div style="border:0.2px solid lightgrey"></div>
            <div class="viewed">
                <a href="home.php"><div class="text" class="account_name" >Home</div></a>    
            </div>

            <div class="viewed" >
                <a href="content.php"><div class="text" class="account_name" >Content</div></a>    
            </div>

            <div class="viewed" >
                <a href="messages.php"><div class="text" class="account_name" >Messages</div></a>    
            </div>

            <div class="viewed" >
                <a href="notification.php"><div class="text" class="account_name" >Notifications</div></a>    
            </div>

            
           </div>
        </div>

        <div class="posts">
            <div class="card mb-3">
               
                <div class="card-body">

                    <h4 class="card-title"><?php echo $fetch['userName']; ?></h4>
                    <h6 class="card-text"><?php echo $fetch['userCourse']; ?></h6>
                    <h6 class="card-text"><?php echo $fetch['userLocation']; ?></h6>

                    <p class="card-text"><?php echo $fetch['userBio']; ?></p>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="#" id="edit" class="edit">Click Me</a>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header">Links and socials</h5>
                <div class="card-body">
                  
                  
                  <a href="#" class="btn btn-primary">Download CV</a>
                  <a href="<?php echo $fetch['userGitLink']; ?>"><i class="bi bi-linkedin"></i></a>
                  <a href="<?php echo $fetch['userLinkedin']; ?>"><i class="bi bi-github"></i></a>
                  <a href="<?php echo $fetch['userTelegram']; ?>"><i class="bi bi-telegram"></i></a>
                </div>
              </div>
        </div>
            
        

    </div>

<?php
    include_once 'footer.php';
?>
         
           


<!-- Card Section -->



<!-- Modal Section -->

<div class="bg-modal">
        <?php if (isset ($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
        <form action="edit-p.inc.php" method='post' enctype='multipart/form-data'>
        <?php 
        $currentUser = $_SESSION[''];
        $sql = "SELECT * FROM user Where user_name ='$currentUser'";

        $gotResults = mysqli_query($conn, $sql);

        if ($gotResults) {
            if(mysqli_num_row($gotResults)>0) {
                while($row = mysqli_fetch_array($gotResults)) {
                    print_r($row['user_name']);
                }
            }
        }
        ?>
	<div class="modal-contents">
		<div class="close">+</div>

		<form action="log-in/edit-p.inc.php" method='post' class='form'>
            <h1 class="text-center">Edit Profile</h1>
			<div class="form-step form-step-active">

                <div class="input-group">
                    <label for="profile_pic">Bio</label>
                    <textarea  id="" cols="30" rows="10" name='bio'></textarea>
                </div>
                <div class="input-group">
                    <label for="Github_link">Github</label>
                    <textarea  id="" cols="10" rows="1" name='git_link'></textarea>
                </div>
                <div class="input-group">
                    <label for="LinkedIn link">LinkedIn</label>
                    <textarea  id="" cols="10" rows="1" name='linkedin_link'></textarea>
                </div>

                <div class="input-group">
                    <label for="Telegram link">Telegram</label>
                    <textarea  id="" cols="10" rows="1" name='telegram_link'></textarea>
                </div>
                <div class="btns-group">
                    <input type="submit" name="submit" value="Submit" class="btn" />
                </div>
            </div>


                
		</form>
        
	</div>
</div>

<script src="js/editp.js"></script>