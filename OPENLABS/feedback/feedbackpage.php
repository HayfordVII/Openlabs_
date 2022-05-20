<?php
	include_once '../header.php';
?>	


<section class="hero" id="home">

</section>

<link rel="stylesheet" href="css/fstyle.css">
	<div class="feedback_section">
		<h1 class="feedback_title headers">Feedback </h1>
    	<div class="feedback_container wrap">
		  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
		    <form action="feedback.php" method="post" class="feedback_form">
			  <h2>How satisfied were you with our Service?</h2>
				 <ul class="feedback_select">
					 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
					 	  <label for="excellent">excellent</label>
					      <div class="ticks t1"></div>
					 </li>
					 <li><input type="radio" name="view" value="good" id="good"> 
						  <label for="good"> good</label>
					      <div class="ticks t2"></div>
					 </li>
					 <li><input type="radio" name="view" value="neutral" id="neutral">
						 <label for="neutral">neutral</label>
					     <div class="ticks t3"></div>
					 </li>
					 <li><input type="radio" name="view" value="poor" id="poor"> 
						  <label for="poor">poor</label>
					      <div class="ticks t4"></div>
					 </li>
				 </ul>

				<h2>If you have specific feedback, please write to us...</h2>
				<textarea placeholder="Additional comments" class="feed" name="comments" required=""></textarea>
				<input type="text" placeholder="Your Name (optional)" name="name"  />
				<input type="email" placeholder="Your Email (optional)" name="email"/>
				<input type="text" placeholder="Your Number (optional)" name="num"  /><br>
				<center><input type="submit" value="submit Feedback" class="feed_details" /></center>

			
		  </form>
		</div>
		<div class="feedback_rights headers">
				<p>© 2022</p>
		</div>
	</div>
<?php
	include_once'../footer.php';
?>









