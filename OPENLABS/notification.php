<?php
    include_once 'header.php';
?>
    <!-- Mainbody -->

    <link rel="stylesheet" href="mainbody.css">
    <link rel="stylesheet" href="sidebar.css">
    <div class="mainbody">
        <div class="sidebar" style="border:none;">
            
               <div class="sidebar_first_col">
                <div class="profile_header" style="border-top-left-radius: 10px;border-top-right-radius:10px;"></div>
                <img src="image.png" alt="noimage" style="height:80px;
                    width:80px;
                    border-radius: 50%;
                    border:4px solid white;
                    
                    margin:-35px auto 0 auto;" >
                
                <div class="profile_info">
                    <p style="text-align: center;" class="act_title">Sudeep Manasali</p>
                    <p class="account_name">Student at Jss tu science and technology ,Mysuru</p>
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
            <div class="card">
                <h5 class="card-header">Notification</h5>
                <div class="card-body">
                    <div class="notifi-item">
                        <img src="img/avatar1.png" alt="img">
                        <div class="text">
                           <h4>Elias Abdurrahman</h4>
                           <p>@lorem ipsum dolor sit amet</p>
                        </div> 
                    </div>
                  
                  
                </div>
              </div>
        </div>
            
        

    </div> 

<?php
    include_once 'footer.php';
?>