<!-- Section Footer (for Mobile Only) -->
<div class="section-footer">
	<div class="container">
    <a href="/">Home</a> <i class="ion-chevron-right"></i> <a href="/about/" class="section-title">About</a>
  </div>
</div>
<!-- Global Footer -->
<footer class="site-footer" role="complementary">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<!-- <a href="http://erlc.com/"><img src="/img/erlc-footerlogo2015.png" class="logo-erlc-footer logo-white" alt="" style="max-width: 100%;"></a> -->
					<h2>Nashville</h2>
					<p>901 Commerce Street, Suite 550
					<br>Nashville, Tennessee 37203
					<br>Phone: (615) 244-2495
					<br>Fax: (615) 242-0065</p>

					<h2>Washington</h2>
					<p>505 Second St., N.E.
					<br>Washington, DC 20002
					<br>Phone: (202) 547-8105
					<br>Fax: (202) 547-8165</p>

					<!-- <h4>Press</h4>
					<p>Elizabeth Bristow
					<br>press@erlc.com
					<br>Phone: (202) 547-0209</p> -->

				</div>
				<div class="col-sm-3">
					<div class="footer-module">
						<h2>Initiatives</h2>
						<!-- <a href="http://www.erlc.com/network"><img class="logo-init" src="/img/LN.png"></a>
						<a href="http://www.canonandculture.com/"><img class="logo-init" src="/img/CandC-Footer-Logo.png"></a>
						<a href="http://www.globalhungerrelief.com/"><img class="logo-init" src="/img/ghr.png"></a>
						<a href="http://psalm139project.org/"><img class="logo-init" src="/img/Psalm139-Logo.png"></a> -->
						<ul class="list-unstyled">
							<li><a href="http://www.erlc.com/network">ERLC Leadership Network</a></li>
							<li><a href="http://www.canonandculture.com/">Canon and Culture</a></li>
							<li><a href="http://www.globalhungerrelief.com/">Global Hunger Relief</a></li>
							<li><a href="http://psalm139project.org/">Psalm 139 Project</a></li>
						</ul>
					</div>
					<div class="footer-module">
						<button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Donate Now</button>
						<!-- <h2>Initiatives</h2>
						<ul class="list-unstyled">
							<li><a href="http://www.erlc.com/network">ERLC Leadership Network</a></li>
							<li><a href="http://www.canonandculture.com/">Canon and Culture</a></li>
							<li><a href="http://www.globalhungerrelief.com/">Global Hunger Relief</a></li>
							<li><a href="http://psalm139project.org/">Psalm 139 Project</a></li>
						</ul> -->
					</div>

				</div>
				<div class="col-sm-6 last">
					<div class="the-weekly-signup">
						<h2><span class="dim">Sign Up For</span> <strong>The Weekly</strong></h2>
						<p>Frankfurter fatback ground round venison boudin. Jerky cupim ham hock frankfurter shoulder landjaeger corned beef swine short loin beef ribs. </p>
						<form class="form form-vertical form-the-weekly form-inverse">
							<fieldset>
								<div class="row">
									<!-- Text input-->
									<div class="form-group form-group-first-name col-md-6 ">
									  <label class="control-label" for="textinput">First Name</label>  
									  <div>
									  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
									    
									  </div>
									</div>
									<!-- Text input-->
									<div class="form-group form-group-last-name col-md-6">
									  <label class="control-label" for="last_name">Last Name</label>  
									  <div>
									  	<input id="last_name" name="last_name" type="text" placeholder="" class="form-control input-md" required="">
									  </div>
									</div>
								</div>
								<div class="form-group form-group-email">
							  	<label class="control-label" for="email">Your Email</label>  
							  	<input id="email" name="email" type="email" placeholder="your@email.com" class="form-control input-md" required="">
							  </div>
							  <div class="form-group form-group-btn">
							    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Subcribe Now &nbsp;<i class="ion-checkmark"></i></button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div class="social-links">
				<a href="https://twitter.com/ERLC" class="social twitter"><i class="ion-social-twitter"></i></a>
				<a href="https://www.facebook.com/erlcsbc" class="social facebook"><i class="ion-social-facebook"></i></a>
				<a href="https://plus.google.com/100441941634266696316/posts" class="social googleplus"><i class="ion-social-googleplus"></i></a>
				<a href="http://instagram.com/erlcsbc" class="social instagram"><i class="ion-social-instagram"></i></a>
				<a href="https://vimeo.com/erlc" class="social vimeo"><i class="ion-social-vimeo"></i></a>
				<a href="https://www.youtube.com/channel/UCutFChK6m2a_8PFcLIu_g_w" class="social youtube"><i class="ion-social-youtube"></i></a>
			</div>
			<div class="legal">
				ERLC &copy; 2016, All rights reserved. | <a href="#">disclaimer on links</a>

			</div>
		</div>
		
	</footer>

	<!-- <div class="visible-xs sizy">XS</div>
	<div class="visible-sm sizy">SM</div>
	<div class="visible-md sizy">MD</div>
	<div class="visible-lg sizy">LG</div> -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<script>
		
		$(window).scroll(function() {
			if ($(this).scrollTop() > 110){  
		    $('#header_wrap').addClass("sticky");
		    $('#content').addClass("sticky");
		    $('#heroCarousel').addClass("sticky");
		  }
		  else{
		    $('#header_wrap').removeClass("sticky");
		    $('#content').removeClass("sticky");
		    $('#heroCarousel').removeClass("sticky");
		  }
		});
	</script>
