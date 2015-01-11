<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/ic_launcher.png">

    <title>DeveloperBook</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font_awesome_min.css" rel="stylesheet">
   	<link href="css/style.css" rel="stylesheet">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26353225-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
function validateForm() {
    
	   alert("hello..."+document.getElementById('captcha').src)
}
</script>
  </head>
  <body>
  <?php require('includes/config.php'); ?>
  
  
			
	<div class="container">
		<div class="alert alert-danger text-center alertMessage" style="display:none;" id="errorMessageDiv">
			<strong>error!</strong>&nbsp;<span id="errorMessage"></span>
		</div>
	</div>
	
    <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="#" class="navbar-brand" id="brandName">DeveloperBook</a>
			<button class="navbar-toggle" id="navbarButton" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id="navHome">Home</a></li>
					<li><a href="#" id="navTutorials">Blogs</a></li>
					<li><a href="#" id="navTutorials">Tutorials</a></li>
					<li><a href="#" id="navAbout">About</a></li>
					<li><a href="#contact" id="navContact" data-toggle="modal">Contact</a></li>
				</ul>				
			</div>
		</div>
	</div>
	
	<div id="homeDiv">
		<div class="container containerMain">
			<div class="jumbotron text-center" id="jumbotronHome">
				<h1>follow your Dreams</h1>
				<p>welcome to my site, free access to my Learning<br/>"sharing knowledge"</p>
				<a class="btn btn-default" href="#" id="navHomeToTutorials">Knowledge >>></a>            
			</div>		
		</div>      
		<div class="container" >
			<div class="carousel slide" id="sliderHome">
				<ol class="carousel-indicators">
					<li data-target="#sliderHome" data-slide-to="0" class="active"></li>
					<li data-target="#sliderHome" data-slide-to="1"></li>
					<li data-target="#sliderHome" data-slide-to="2"></li>
					<li data-target="#sliderHome" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/banner0.jpg" alt="Personality" class="img-responsive">
						<div class="carousel-caption">
							<h4>personality matters</h4>
						</div>
					</div>
					<div class="item">
						<img src="images/banner1.jpg" alt="Programming" class="img-responsive">
						<div class="carousel-caption">
							<h4>developer by nature</h4>
						</div>
					</div>
					<div class="item">
						<img src="images/banner2.jpg" alt="Music" class="img-responsive">
						<div class="carousel-caption">
							<h4>music is my soul</h4>
						</div>
					</div>
					<div class="item">
						<img src="images/banner3.jpg" alt="Community" class="img-responsive">
						<div class="carousel-caption">
							<h4>care for others</h4>
						</div>
					</div>
				</div>
				<a class="carousel-control left" href="#sliderHome" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a class="carousel-control right" href="#sliderHome" data-slide="next">
					<span class="icon-next"></span>
				</a>
			</div>
		</div> 
	</div>
    <div id="tutorialsDiv">
		<div class="container containerMain">
			<div class="row">
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h3>My Blogs <small>latest by jan 2015</small></h3>                             
							</div>
							<div class="col-lg-12 embed-video">
									<?php
		                     	try {

						   $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
							while($row = $stmt->fetch()){
						
						echo '<div>';
							echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
							echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
							echo '<p>'.$row['postDesc'].'</p>';				
							echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';				
						echo '</div>';

				               }

								} catch(PDOException $e) {
									echo $e->getMessage();
								}
							?>
							</div> 
							
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">references...</h4>  
							<p>click below to go to their website</p>
						</a>
						<a href="http://projects.spring.io/spring-framework/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">spring</h4>                        
						</a>
						<a href="http://hibernate.org/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">hibernate</h4>                        
						</a>
						<a href="http://projects.spring.io/spring-security/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">spring security</h4>                        
						</a> 
						<a href="http://www.eclipse.org/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">eclipse</h4>                        
						</a>
						<a href="http://www.apache.org/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">apache</h4>                        
						</a>
						<a href="https://netbeans.org/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">netbeans</h4>                        
						</a> 
						<a href="http://www.mysql.com/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">mysql</h4>                        
						</a>
						<a href="http://projects.spring.io/spring-framework/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">Jboss Tools</h4>                        
						</a>
						<a href="http://projects.spring.io/spring-framework/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">Web service-WS/RS</h4>                        
						</a>
						<a href="https://struts.apache.org/" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">Struts</h4>                        
						</a>
						<a href="http://www.oracle.com/technetwork/java/javaee/javaserverfaces-139869.html" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">JSF</h4>                        
						</a>
						<a href="http://www.oracle.com/technetwork/java/javaee/overview/index.html" class="list-group-item" target="_blank">
							<h4 class="list-group-item-heading">J2EE-6</h4>                        
						</a>
					</div>
				</div>
			</div>
		</div> 
	</div>
    <div id="aboutDiv">
		<div class="container containerMain">
			<div class="row">
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h3>About Me</h3> Developer-Book
							</div>
							<img class="featuredImg" src="images/banner0.jpg">
							<h4>Early Life</h4>
							<p>born on August July 1990 and living with my family in Jaipur Rajasthan India </p>
							<h4>School Days</h4>
							<p>attended preparatory, elementary, and high-school in a small but competitive school (MHS jaipur)<br/>then went to college at 
the University SKIT Jaipur and graduated with Bachelor's Degree in Computer science Engineering.</p>
							<h4>Leaning Curve</h4>
							<p>I am developer started my life as application developer from my college and started working with J2EE application and later 
moved to open-source application development and also developing Mobile Apps based on windows and android </p>
							<h4>Career Line</h4>
							<p>started as a java/J2ee Developer at Amdocs DVCI Delhi in 2012 right after graduation<br/>then went to United Health Group 
(from Nov-2014) as Software Engineer<br/>and currently employed at UHG for software development </p>
							<a href="https://www.dropbox.com/s/wvd7e6is76zj0na/Tarun-Sharma.pdf?dl=0">Check My resume</a>
						</div>
					</div>
				</div>  
				<div class="col-lg-3">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">programming</h4>
							<p class="list-group-item-text">this passion actually drives me in many different directions. When i work for any development 
task it feels like i am going to build something smart and something different which is something new for this world , I am 
developer and passionate about learning latest technologies and also provide learning to others on different technologies</p>
							
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">music</h4>
							<p class="list-group-item-text">it gives me fluid when i'm dehydrated by constant work, stress, and noisy environment. it also 
gives me way to express my self in a different way and in a different tone. i play guitar.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">community</h4>
							<p class="list-group-item-text">sharing knowledge is my passion. in that sense, i create video tutorials provide trainings and  
share articles,started working as open-source and contributing in different communities </p>
						</a>  
                      <a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Learning</h4>
							<p class="list-group-item-text">I am J2EE Enterprise application developer , working on Enterprise and open source Technologies 
J2EE web frameworks,Spring,Spring MVC,Struts,Hibernate,Web service Jax-WS,Jax-RS and having experence of working Enterprise SOA 
architecture and different tools from IBM and Oracle</p>
						</a>						
					</div>
				</div>
			</div>
		</div>
	</div>	
	 
    <div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<p class="navbar-text pull-left">Copyrigt 2014 | <a href="http://www.gennexttraining.com" target="_blank">www.gennexttraining.com</a></p>
            <div class="btn-group btn-group-sm pull-right">
                <a class="navbar-btn btn-primary btn" href="https://www.facebook.com/gennexttraining" target="_blank"><i class="fa fa-facebook"></i> like</a>
                <a class="navbar-btn btn-info btn" href="https://twitter.com/gennexttraining" target="_blank"><i class="fa fa-twitter"></i> follow</a>
                <a class="navbar-btn btn-danger btn" href="http://www.youtube.com/user/gennexttraining" target="_blank"><i class="fa fa-youtube"></i> 
subscribe</a>
            </div>            
		</div>
	</div>
	
	<div class="modal fade" id="contact" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
				<form class="form-horizontal" method="post" name="contactForm">
                    <div class="modal-header">
                    <h4><small>contact</small> DeveloperGeek</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">your name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="contact-name" name="senderName" placeholder="full name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-lg-3 control-label">your email</label>
                            <div class="col-lg-8">
                                <input type="email" class="form-control" id="contact-email" name="from" placeholder="you@example.com"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-msg" class="col-lg-3 control-label">your message</label>
                            <div class="col-lg-8">
                                <textarea type="email" class="form-control" id="contact-msg" name="message" rows="5" placeholder="your message here"
></textarea>
                            </div>
                        </div>  
						<div class="form-group">
							<label class="col-lg-3 control-label">captcha</label>
							<div class="col-lg-8">
								<img id="captcha" name="captcha" src="captcha.php" alt="CAPTCHA Image" />
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">&nbsp;</label>
							<div class="col-lg-8">
								<div class="input-group">
									 <input type="text" class="form-control" name="captcha_code" size="25" maxlength="6" placeholder="enter code above"/>
									<span class="input-group-btn">
										
									</span>
								</div>							
							</div>													
						</div>
                    </div>					
                    <div class="modal-footer">
                        <a class="btn btn-default" data-dismiss="modal">Close</a>
						<button   type="button" name="submit" class="btn btn-primary" id="submitContact">Send</button>                        
                    </div>
                </form>
            </div>
        </div>  
    </div>
	
	
	<?php

?>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>	
  </body>
</html>


