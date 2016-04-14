<?php 
	
 $title = "Initiatives";
	
?>


<?php include "../includes/head.php" ?>

<body class="subpage about">
	<div class="wrap" id="header_wrap">
		<?php include "../includes/header.php" ?>
		<!-- <div class="section-header">
			<div class="container">
		    <a href="/">Home</a> <i class="ion-chevron-right"></i> <a href="/about/" class="section-title">About</a>
		  </div>
	  </div> -->
	</div>
	<article id="content" role="main">
		
		<div class="container">
			<div class="row">
				<div class="main">
					<h1 class="page-title"><?php echo $title ?></h1>



					<article class="snippet clearfix">
						<div class="logo">
							<a href="http://www.canonandculture.com/"><img src="http://www.erlc.org/img/initiatives/Canon-Circle.png" width="160px" alt="canon &amp; Culture" class="snippet-img"></a>
						</div>
						<div class="snippet-info">
							<h2><a href="http://www.canonandculture.com/">Canon and Culture</a></h2>
							<p>Canon &amp; Culture serves as an online forum for Christian thinking on a wide range of issues—whether art, vocation, politics, education, philosophy, ethics, technology, culture, and the common good.</p>
						</div>
					</article>  
					
					<article class="snippet clearfix">
						<div class="logo">
							<a href="http://erlc.com/institute"><img src="http://www.erlc.org/img/initiatives/ERCL-circle.png" width="160px" alt="ERLC Research Institute" class="snippet-img"></a>
						</div>
						<div class="snippet-info">
							<h2><a href="http://erlc.com/network/">ERLC Leadership Network</a></h2>
							<p>The aim of the Research Institute is to be a catalyst to connect the agenda of the gospel to the complex questions of the day—and to do so at the highest levels of academic scholarship for the good of local congregations. </p>
						</div>
					</article>  
			
					<article class="snippet clearfix">
						<div class="logo">
							<a href="http://psalm139project.com/"><img src="http://www.erlc.org/img/initiatives/Psalm139-circle.png" width="160px" alt="The Psalm 139 Project" class="snippet-img"></a>
						</div>
						<div class="snippet-info">
						<h2><a href="http://psalm139project.com/">The Psalm 139 Project</a></h2>
						<p>Join the ERLC in raising funds to place sonograms in pregnancy centers across the country.</p>
						</div>
					</article>

					<article class="snippet clearfix">
						<div class="logo">
							<a href="http://www.globalhungerrelief.com"><img src="http://www.erlc.org/img/initiatives/Global-circle.png" width="160px" alt="Global Hunger Relief" class="snippet-img"></a>
						</div>
						<div class="snippet-info">
						<h2><a href="http://worldhungerfund.com/">Global Hunger Relief</a></h2>
						<p>100% of donations to Global Hunger Relief directly provide food &amp; relief. It’s the only fund of it’s kind!</p>	
						</div>
					</article>	

					<article class="snippet clearfix">
						<div class="logo">
						<a href="/leland-house-press"><img src="http://www.erlc.org/img/initiatives/Leland-circle.png" width="160px" alt="Leland House Press" class="snippet-img"></a>
						</div>
						<div class="snippet-info">
						<h2><a href="/leland-house-press">Leland House Press</a></h2>
						<p>Leland House Press exists to equip and educate the local church about ethical and religious liberty issues through the publication of various eBooks and booklets.</p>
						</div>
					</article>

			


				</div>
				<div class="sidebar">
					<nav class="local-nav">
					  <h2 class="title">Initiatives</h2>
					  <section>
					  	<ul class="nav nav-stacked">
		            <li><a href="#">Research Institute</a></li>
								<li><a href="#">Academy</a></li>
								<li><a href="#">Church Equip</a></li>
								<li><a href="#">Leland House Press</a></li>
								<li><a href="#">Leadership Network</a></li>
								<li><a href="#">Canon &amp; Culture</a></li>
								<li><a href="#">Global Hunger Relief</a></li>
								<li><a href="#">Psalm 139 Project</a></li>
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
		$(".nav-item-initiatives").addClass("active");
	})

  </script>
</body>