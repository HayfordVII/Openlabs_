<?php
    include_once 'header.php';
?>

<link rel="stylesheet" href="css/mainbody.css">
<link rel="stylesheet" href="css/sidebar.css">
    <!-- Mainbody -->


    <div class="mainbody">
        <div class="sidebar" style="border:none;">
            
               <div class="sidebar_first_col">
                <div class="profile_header" style="border-top-left-radius: 10px;border-top-right-radius:10px;"></div>
                <img src="imgs/Openlabs-min.png" alt="noimage" style="height:80px;
                    width:80px;
                    border-radius: 50%;
                    border:4px solid white;
                    
                    margin:-35px auto 0 auto;" >
                
                <div class="profile_info">
                    <p style="text-align: center;" class="act_title"><?=$_SESSION['name']?></p>
                    <p class="account_name"><?=$_SESSION['course']?></p>
                </div>
                
                <div style="border:0.2px solid lightgrey"></div>
                <div class="viewed" >
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
            <div class="post_box">
                <div class="input">
                    <div class="input_text">
                        <img src="image.png" alt="no image" class=profile>
                        <input type="text" value="start a post" class="post_input">
                    </div>
                    <div class="input_blocks">
                        <div class="input_option">
                            <div class="option"><i class="bi bi-image" style="color:lightblue"></i> </div><div class="option_text">Photo</div>
                        </div>
                        <div class="input_option">
                            <div class="option"><i class="bi bi-play-btn-fill" style="color:lightgreen"></i> </div><div class="option_text">Video</div>
                        </div>
                        <div class="input_option">
                            <div class="option"><i class="bi bi-calendar-event" style="color:orange"></i> </div><div class="option_text">Event</div>
                        </div>
                        <div class="input_option">
                            <div class="option"><i class="bi bi-card-text" style="color:crimson"></i> </div> <div class="option_text">Write article</div>
                        </div>
                    </div>
                </div>
              
            </div>





            



 

            <div class="post_item">
                <div class="post_item_header">
                    <div class="post_item_info">
                        <img src="new.png" alt="no image" class="post_profile" style="height:60px">
                    <div class="post_item_owner" style="margin-left:8px;">
                        <a href="#" class="act_title">Techniczoid </a>
                        <p class="account_name">20/14/2022</p>
                        <p class="account_name">Web Developer</p>
                    </div>
                    </div>
                    <i class="bi bi-three-dots" style="padding:5px;" ></i>
                </div>

                <div class="post_item_body_info" >
                    <p style="font-size: 0.95rem;">Published new video on CSS Property Box model. this video will run through few more properties that make up the 
                        box-model , Margin, Border, Padding, Content-Height & Width
                    </p>    
                </div>

                <video width="100%"  controls class="post_iten_body_video" style="outline:none;">
                    <source src="box_model.mp4" type="video/mp4">
                </video>

                

                <div class="post_item_footer">
                    <div class="footer_item">
                        <i class="bi bi-hand-thumbs-up"></i> <div>Like</div>
                    </div>
                </div>


                
            </div>
               
            


         
        </div>
        
    </div>

<?php
    include_once 'footer.php';
?>   