<?php

	require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';

	require_once ROOT_PATH . '/includes/head.php';

?>

<!--header strat here-->
<?php require_once ROOT_PATH . '/includes/headerHomePage.php'; ?>
<!--header end here-->

<!-- FlexSlider -->
<script defer src="/js/jquery.flexslider.js"></script>

<script type="text/javascript">
$(function(){});
$(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		$('body').removeClass('loading');
		}
	});
});
</script>
<!-- FlexSlider -->

<!--banner end here-->

<!--educate logos start here-->
<?php require_once ROOT_PATH . '/includes/educateHomePage.php'; ?>
<!--educate logos end here-->

<!--we do start here-->
<div class="we-do">
	<div class="container">
		<div class="we-do-main">
			   <h2>What We Do </h2>
			   <h4>Raised standards of learning, teaching, assessment</h4>
			   <p>Promoted health, child protection, attendance, good behavior and discipline of learners.</p>
			   <a href="single.html">Read More</a>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--we do end here-->

<!--pop-up-box-->
<script type="text/javascript" src="/js/modernizr.custom.53451.js"></script>  
<link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--pop-up-box-->

<!--watch start here-->
<?php require_once ROOT_PATH . '/includes/watchHomePage.php'; ?>
<!--watch end here-->

<!--event start here-->
<?php require_once ROOT_PATH . '/includes/eventsHomePage.php'; ?>
<!--event end here-->

<script src="/js/responsiveslides.min.js"></script>

<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider2").responsiveSlides({
			auto: true,
			pager: true,
			speed: 300,
			namespace: "callbacks",
		});
	});
</script>

<!--clients star here-->
<?php require_once ROOT_PATH . '/includes/clientsHomePage.php'; ?>
<!--clients end here-->

<!--footer start here-->
<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
<!--footer end here-->