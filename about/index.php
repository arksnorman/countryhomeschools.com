<?php

	require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';

	require_once ROOT_PATH . '/includes/head.php';

?>

<!--header strat here-->
<?php require_once ROOT_PATH . '/includes/universalHeader.php'; ?>
<!--header end here-->

<!--banner end here-->

<!--tab start here-->
<script type="text/javascript" src="/js/colorfulTab.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#colorful").colorfulTab();    

$("#colorful-elliptic").colorfulTab({
theme: "elliptic"
}); 

$("#colorful-flatline").colorfulTab({
theme: "flatline"
});    

$("#colorful-background-image").colorfulTab({
theme: "flatline",
backgroundImage: "true",
overlayColor: "#002F68",
overlayOpacity: "0.8"
});   

});
</script>
<!--tab start here-->

<!--about start here-->
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="about-top">
				<h2>About Us</h2>
				<p>Country Home Primary is a community School registered with government of Uganda. The school was formed to empower rural poor resourced and disadvantaged children. Country Home, a co-educational primary school, Is situated in kimukunda, Rakai district, on the main Road from Uganda to Tanzania in Rakai district. Country Home has an inclusive and supportive philosophy which promotes the children’s cognitive, spiritual and social development. The strength of the philosophy is characterized by the school community living out in its care; as evidenced from the parent consultation in June 2016, 85% of parents felt that their children are happy and secure and that Country Home offers excellent provision.</p>
			</div>
			<div class="about-bottom">
				<div class="col-md-6 about-bott-left">
					<img src="/images/ab.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-6 about-bott-right">
					 <!-- Elliptic -->
					  <div class="colorful-tab-wrapper" id="colorful-elliptic">
					    <ul class="colorful-tab-menu">
					      <li class="colorful-tab-menu-item active" tab-color="#C9003C"><a href="#elp-0">About</a></li>
					      <li class="colorful-tab-menu-item" tab-color="#00A566"><a href="#elp-1">Challenges</a></li>
					      <li class="colorful-tab-menu-item" tab-color="#8021D3"><a href="#elp-2">Achievements</a></li>
					      <li class="colorful-tab-menu-item" tab-color="#E54400"><a href="#elp-3">Opportunities</a></li>
					     
					    </ul>
					    <div class="colorful-tab-container">  
					      <div class="colorful-tab-content active" id="elp-0">  
					        <p>Country Home ensures that all learners are given a wide range of experiences and are encourage to achieve their full potential and to live out the school motto ’Deed Not Words ‘Learners are provided with every opportunity and encouraged to achieve success, which takes place in a welcoming stimulating and safe environment which supports learners ‘learning and achievements in all areas, country Homes works in partnership with parents and the Religious counminty.</p>
					      </div>
					      <div class="colorful-tab-content" id="elp-1"> 					        
					          <ul>
					          	<li>School site –temporary building.</li>
					          	<li>Increased admissions numbers.</li>
					          	<li>School can’t yet sustain capital and recurrent budget.</li>
					          	<li>Many parents/guardians can’t yet meet fully the needs of their children at school.</li>
					          	<li>Poor education background of the learners-particular the low and underachievement achieving cohort of new learners</li>					          	
					          </ul>
					      </div>
					      <div class="colorful-tab-content" id="elp-2"> 
					      	  <ul>
					          	<li>410 learners enrolled to school.</li>
					          	<li>17 teaching staff.</li>
					          	<li>Acquisition of 8.1 hectares of land.</li>
					          	<li>Registration with the authorities.</li>
					          	<li>The following semi-permanent structures have been constructed and are in use: 8 classroom: 8 staff quarters: two dormitories : 16 stances of latrines: and kitchen</li>	          	
					          </ul>
					      </div>
					      <div class="colorful-tab-content" id="elp-3"> 
					        <ul>
					          	<li>Children and parents available willing to join the school.</li>
					          	<li>Recent development in the local area.</li>
					          	<li>Supportive hardworking and dedicated staff focused on child centered education.</li>
					          	<li>Involvement of parents and the wider community.</li>
					          	<li>Established links within the local and wider community.</li>	          	
					          </ul>
					      </div>
					      
					    </div>
					  </div>
					  <!-- Elliptic -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--about end here-->

<!--about layer1-->
<div class="about-layer1">
	<div class="container">
		<div class="about-agile">
			<h4>Our School Compound</h4>
			<p></p>
			<p></p>
		</div>
	</div>
</div>
<!--about layer1-->

<!--team start here-->
<div class="team">
	<div class="container">
		<div class="team-main">
			  <div class="team-top">
			  	<h3>Our Staff</h3>
			  </div>
              <div class="team-bottom">
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="/images/t1.jpg" alt="img"></div>
                      <div class="info"> 
                        <div class="info-back">
                          <h3>John</h3>
                          <p></p>
                          

                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">		        	  
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="/images/t2.jpg" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>John</h3>
                          <p></p>
                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">		        	  
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="/images/t3.jpg" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>John</h3>
                          <p></p>
                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">		        	  
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="/images/t4.jpg" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>John</h3>
                          <p></p>
                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">		        	  
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                
              </div>
              <!-- end Bottom to top -->
		</div>
	</div>
</div>	
<!--team end here-->

<!--footer start here-->
<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
<!--footer end here-->