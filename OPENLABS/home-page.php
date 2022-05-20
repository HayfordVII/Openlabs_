<?php
    include_once 'header.php';
?>
	<title>Home-Page(Employer)|OPENLABS</title>
	<link rel="stylesheet" href="css/test.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
	<!-- Intro section -->
	
    <section class="hero" id="home" >
		
		<div class="display-1" >
			<h1>WELCOME TO THE OPENLABS</h1>
			<h1>INTERNSHIP PROGRAM</h1>	
		</div>
		<div>
			<a href="learn.html" class="btn btn-info " id="learn">Learn More</a>
		</div>
    </section>
    

	<!-- Services section -->
    <section class="services " id="services" >
        <div class="max-width">
            <h2 class="title">Our Services</h2>
            <div class="services-content">
                <div class="column left">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VNSe2kcqO9w?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="column right">
                    <p >Gained some experience in the IT field, looking to text it out in the real world?
                        Join our INTERNSHIP PROGRAM which gives you access to over 50+ IT companies in Ghana. Send resume or
                        your profolio to get into any of institutions which suit your experience and conditions.
                    </p>

					<p>Watch the alleged video to gain more info.</p>
                    <h4>All applicants must have :</h4>
                    
					<ul class="services__list">
                        <li class="services__item">Some knowledge and experience about the carrer path they choose</li>
                        <li class="services__item">A well written resume</li>
                        <li class="services__item">A well prepared portfolio</li>
                        <li class="services__item">projects</li>
                        <li class="services__item">education</li>
                    </ul>
                </div>

            </div>    
        </div>
    </section>


    <!-- Carrer Path -->
	<section class="carrer" id="carrer">
		<div class="max-width">
			<h2 class="title">Carrer Path</h2>
		</div>
		<!-- For Empolyers -->
		
		<div class="contain">
			<div class="card ">
			  <a href="DataS.php?id=cybersecurity"><img src="imgs/security-min.jpg" alt="" class="card__img"></a>
			  <div class="card__text">
				<a href="DataS.php?id=cybersecurity"><h3 class="card__title">CYBERSECURITY</h3></a>
			  </div>
				
			</div>
			<div class="card">
			  <a href="DataS.php"><img src="imgs/DataS-min.jpg" alt="" class="card__img"></a>
			  <div class="card__text">
				<a href="DataS.php"></a><h3 class="card__title">DATA SCIENCE</h3>
				
			</div>
			</div>
			<div class="card">
				<a href="CyberS.php?id=graphics"><img src="imgs/Graphics-min.jpg" alt="" class="card__img"></a>
				<div class="card__text">
                    <a href="CyberS.php?id=graphics"><h3 class="card__title">GRAPHIC DESIGN</h3></a>
				  
				</div>
			</div>
		</div>
		<div class="contain">

			<div class="card">
			  <a href="CyberS.php?id=networking"><img src="imgs/Network-min.jpg" alt="" class="card__img"></a>
			  <div class="card__text">
				<a href="CyberS.php?id=networking"><h3 class="card__title">NETWORKING</h3></a>
			  </div>	
			</div>

			<div class="card">
			  <a href="CyberS.php?id=softwaredev"><img src="imgs/Software-min.jpg" alt="" class="card__img"></a>
			  <div class="card__text">
				<a href="CyberS.php?id=softwaredev"><h3 class="card__title">SOFTWARE DEV</h3></a>	
			  </div>
			</div>

            
			<div class="card">
				<a href="CyberS.php?id=webdev"><img src="imgs/Web Dev-min.jpg" alt="" class="card__img"></a>
				<div class="card__text">
                    <a href="CyberS.php?id=webdev"><h3 class="card__title">WEB DEV</h3></a>
				  
				</div>
			</div>
            
		</div>
		



		
	</section>
	
        
<!-- footer section -->
<?php
    include_once 'footer.php';
?>    