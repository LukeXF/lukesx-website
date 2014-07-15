<?php
	/*
	  Author :		Luke Brown
	  License:  	Written Permission required
	  Created: 		July 2014
	  URL    :		https://github.com/LukeXF/lukesx-website
	  Contact:		me@luke.sx
	*/
 ?>
<div class="wrapper">
<?php include 'watermark.php' ?>
<html>
	<head>
		<title>Luke.sx</title>        
		<?php include 'header.php' ?>
		<style type="text/css">
			h1 {
			    font-family:Lato;
			    font-weight:300;
			    font-size:2.5em;
			}

			h1.days {
			    font-family:Lato;
			    font-weight:300;
			    font-size:6em;
			    margin: -8px;
			    text-align: center;
			}
			ul.in {
				text-align: center;
			}
		</style>
		<script type="text/javascript" href="http://tangledindesign.com/demos/contact-form/main.css"></script>
	</head>
	<?php include 'nav.php' ?>
		
<div class="piece piece__dark lesson-banner hide-from-mobile">
	<div class="container">
		<h2 class="lessons__quote lesson-banner-title wow fadeInDown">Examination Count Down</h2>
		<h4 class="lesson-date wow fadeInUp">Because apparently exams really do matter!
		</h4>
	</div>
</div>


<!-- POPULAR LESSONS -->
<div class="piece home-browsing">
	<div class="container wrap wow bounceInUp">
		<div class="container">
			
			<div class="col-md-3">
				<ul class="in">	
					<li>
						<div class="in-panel">
							<div class="in-heading">
								<h1 class="in-title">Business  Studies One</h1> 					
							</div>
								<?php 
									$cdate = mktime(0, 0, 0, 05, 19, 2014, 0);
									$today = time();
									$difference = $cdate - $today;
									if ($difference < 0) { $difference = 0; }
									echo "There are <h1 class='days'>". floor($difference/60/60/24)."</h1> days remaining";
								?>						
						</div>
					</li>
				</ul>
			</div><!--Col-md-6-->


			<div class="col-md-3">
				<ul class="in">	
					<li>
						<div class="in-panel">
							<div class="in-heading">
								<h1 class="in-title">Computing Coding</h1> 					
							</div>
								<?php 
									$cdate = mktime(0, 0, 0, 06, 09, 2014, 0);
									$today = time();
									$difference = $cdate - $today;
									if ($difference < 0) { $difference = 0; }
									echo "There are <h1 class='days'>". floor($difference/60/60/24)."</h1> days remaining";
								?>						
						</div>
					</li>
				</ul>
			</div><!--Col-md-6-->


			<div class="col-md-3">
				<ul class="in">	
					<li>
						<div class="in-panel">
							<div class="in-heading">
								<h1 class="in-title">Business Studies Two</h1> 					
							</div>
								<?php 
									$cdate = mktime(0, 0, 0, 06, 03, 2014, 0);
									$today = time();
									$difference = $cdate - $today;
									if ($difference < 0) { $difference = 0; }
									echo "There are <h1 class='days'>". floor($difference/60/60/24)."</h1> days remaining";
								?>						
						</div>
					</li>
				</ul>
			</div><!--Col-md-6-->


			<div class="col-md-3">
				<ul class="in">	
					<li>
						<div class="in-panel">
							<div class="in-heading">
								<h1 class="in-title">Computer Theory</h1> 					
							</div>
								<?php 
									$cdate = mktime(0, 0, 0, 06, 02, 2014, 0);
									$today = time();
									$difference = $cdate - $today;
									if ($difference < 0) { $difference = 0; }
									echo "There are <h1 class='days'>". floor($difference/60/60/24)."</h1> days remaining";
								?>						
						</div>
					</li>
				</ul>
			</div><!--Col-md-6-->

		</div><!--container-->
	</div>
</div>

</div><!--wrapper-->
<?php include 'footer.php' ?>
</body>
</html> 