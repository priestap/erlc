<?php 
	
 $title = "Podcasts";
	
?>


<?php include "../includes/head.php" ?>

<body class="subpage resources podcasts">
	<div class="wrap" id="header_wrap">
		<?php include "../includes/header.php" ?>
		<div class="section-header">
			<div class="container">
		    <a href="/">Home</a> <i class="ion-chevron-right"></i> <a href="/resource-library/" class="section-title">Resources</a> <i class="ion-chevron-right"></i> <a href="/resource-library/" class="section-title">Podcasts</a>
		  </div>
	  </div>
	</div>
	<article id="content" role="main">
		<div class="container">
			<div class="row">
				<div class="main">
					<header>
						<h1 class="page-title">Podcasts</h1>
					</header>
					<div class="latest-posts">
						<div class="podcast-hero">
							
						</div>
						<div class="podcast-list">

						</div>
					</div>
				</div>
				<div class="sidebar">
					<nav class="local-nav">
						<h2 class="title">Resource Library</h2>
						<section>
							<h3>Highlights</h3>
							<ul class="nav nav-stacked">
								<li><a href="/resource-library/recently-added">Recently Added</a></li>

								<li><a href="/resource-library/essential-resources">Essential Resources</a></li>

								<li><a href="/resource-library/featured-resources">Featured Resources</a></li>
      
    					</ul>
					  </section>
					  <section>
					    <h3>Browse By Category</h3>
					    <ul class="nav nav-stacked">
						    <li class="sidebar-nav-item-podcast-episodes">
						      <a href="/resource-library/podcasts.php">Podcast Episodes</a>
						    </li>
					      <li class="sidebar-nav-item-">
					        <a href="/resource-library/sermons">Issue Briefs</a>
					      </li>
						    <li class="sidebar-nav-item-bulletins">
						      <a href="/resource-library/bulletins">Bulletins</a>
						      
						    </li>
						    <li class="sidebar-nav-item-articles">
						      <a href="/resource-library/articles">Articles</a>
						    </li>
						    <li class="sidebar-nav-item-conference-messages">
						      <a href="/resource-library/conference-messages">Conference Messages</a>
						    </li>
						    <li class="sidebar-nav-item-seminars">
						      <a href="/resource-library/seminars">Seminars</a>
						    </li>
						    <li class="sidebar-nav-item-policy-and-vision-documents">
						      <a href="/resource-library/policy-and-vision-documents">Policy and Vision Documents</a>
						    </li>
						    <li class="sidebar-nav-item-forms">
						      <a href="/resource-library/forms">Forms</a>
						    </li>
					    </ul>
					  </section>
					  <section class="share-nav">
					  	<h3 class="text-left">Share</h3>
					  	<ul class="nav nav-pills share share-icons">
								<li><a href="#" class="print" title="Print this Article"><i class="ion-android-print"></i></a></li><li><a href="#" class="facebook" title="Share this Article on Facebook"><i class="ion-social-facebook"></i></a></li><li><a href="#" class="twitter" title="Share this Article on Twitter"><i class="ion-social-twitter"></i></a></li><li><a href="#" class="linkedin" title="Share this Article on LinkedIn"><i class="ion-social-linkedin"></i></a></li><li><a href="#" class="googleplus" title="Share this Article on Google+"><i class="ion-social-googleplus-outline"></i></a></li><li><a href="#"><i class="ion-email"></i></a></li>
							</ul>
					  </section> 
					</nav>
        </div>
			</div>
		</div>   
	</div>
	</article>
	
	<?php include "../includes/footer.php" ?>
  <script async>
  	$(document).ready(function(){
    	$(".nav-item-resource-library").addClass("active");
    	$(".sidebar-nav-item-podcast-episodes").addClass("active");
		});
  </script>
</body>