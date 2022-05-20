<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sign-1.css">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>A Market to connect Interns and Employers | Openlabs</title>
</head>
<body>


  <header>
        <div class="container">
            <nav class="nav">
                <a href="test.html" class="logo"><img src="imgs/Openlabs-png.png" alt="" height="70px"></a>
                <ul class="nav-list">
                    <li>
                        <p>Sign up as:</p>
                    </li>
                    <li>
                        <a href="Signup.php" class="nav-link">Employer</a>
                    </li>
                    <li>
                        <a href="Signup.php" class="nav-link">Intern</a>
                    </li>
                    <li>
                        <a href="ABOUT US.html" class="nav-link"></a>
                    </li>
                    <div>
                        <a href="login.php" class="btn btn-info" id="learn">log in</a>
                    </div>
                </ul>
            </nav>
        </div>
        
    </header>
    
    <div class="hero"></div>

    <div class="footer_con mt-5" id="">
		<div class="footer_links">
			<div class="footer_link_wrapper">
				<div class="footer_link_item" id="about">
					<h2>About Us</h2>
					<a href="learn.html">How it works</a>
					<a href="/sign-up">Testimonials</a>
					<a href="/sign-up">Careers</a>
					<a href="/sign-up">Terms of Services</a>
				</div>
				<div class="footer_link_item" id="contact">
					<h2>Contact Us</h2>
					<a href="/sign-up">Contact</a>
					<a href="/sign-up">Support</a>
					<a href="/sign-up">Donations</a>
					
				</div>
			</div>
			<div class="footer_link_wrapper">
				<div class="footer_link_item">
					<h2>Socials</h2>
					<a href="/sign-up">Facebook</a>
					<a href="/sign-up">Instagram</a>
					<a href="/sign-up">Youtube</a>
					<a href="../home-page-emp.php">Twitter</a>
				</div>
			</div>
		</div>
		<section class="social_media">
			<div class="social_media_wrap">
				<div class="footer_logo">
					<a href="/" id="footer_logo"><img src="imgs/Openlabs-min.png" height="70px"></a>
				</div>
				<p class="website_rights">Openlabs 2022. All rights reserved</p>
				<div class="social_icons">
				<a href="/" class="social_icon_link"><i class="fab fa-facebook"></i></a>
				</div>
			</div>
		</section>		
	</div>


    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
        })
    </script>
</body>
</html>