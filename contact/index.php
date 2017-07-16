<?php

	require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';

	require_once ROOT_PATH . '/includes/head.php';

?>

<!--header strat here-->
<?php require_once ROOT_PATH . '/includes/universalHeader.php'; ?>
<!--header end here-->

<!--banner end here-->

<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">	
			<div class="contact-top">
				<h2>Contact</h2>
				<p></p>
			</div>		 			 
			<div class="contact-block1">
			 	<div class="col-md-6 contact-address">
			 	<h3>Contact Info</h3>
			 	<p></p>
			 	<ul>
			    	<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span><p>Director Home Country Schools</p></li>
			    	<li><span class="glyphicon glyphicon-phone" aria-hidden="true"> </span><p>+256 755 784 978</p></li>			    	
			    	<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span><p><a href="mailto:info@example.com">director@countryhomeschools.com</a></p></li>
			    </ul>
			 	</div>
			 	<div class="col-md-6 contact-block-left">
				 	<form action="#" method="post">
				 		<input type="text" placeholder="Name" required="" name="Name">
	                    <input type="text" class="email" placeholder="Email" name="Email">
	                    <input type="text" class="subject" placeholder="Subject" name="Subject">               
	                    <textarea placeholder="Message" name="message"></textarea>
	                    <input type="submit" value="Send">
				 	</form>
			 	</div>
			 	<div class="clearfix"> </div>
			</div>
					 			 
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212126.07899261903!2d150.68928304602147!3d-33.82598834810063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1463468876401"  allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->

<!--footer start here-->
<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
<!--footer end here-->