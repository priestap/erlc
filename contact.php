<?php 
	
 $title = "Contact";
	
?>


<?php include "includes/head.php" ?>

<body class="subpage contact">
	<div class="wrap" id="header_wrap">
		<?php include "includes/header.php" ?>
	</div>
	<article id="content" role="main">
		<div class="container">
			<div class="row">
				<div class="main">
					<article class="large-8 columns">
						<section class="block">
							<h2><a href="/erlc/faqs/">FAQ&rsquo;s</a></h2>
							<p>Have a <a href="/erlc/faqs/">question</a>? Please visit our <a href="/erlc/faqs/">Frequently Asked Questions</a> first, just in case we&rsquo;ve already&nbsp;answered&nbsp;it. </p>
						</section>
						<section class="block">
							<h2><a href="/erlc/speaking/">Events, speaking requests</a></h2>
							<p><a href="/erlc/speaking/">Submit a request</a> for an ERLC speaker at your next event.<br>(Note: If you are interested in booking an event with Dr. Russell Moore, please visit his website, <a href="http://www.russellmoore.com">russellmoore.com</a>.)</p>
						</section>
						<section class="block">
							<h2>Other question via email</h2>
							<form id="contact_form" class="form form-horizontal" method="post" action="//erlc.com/">
								<div class="hiddenFields">
									<input type="hidden" name="ACT" value="21">
									<input type="hidden" name="RET" value="http://erlc.com">
									<input type="hidden" name="URI" value="erlc/contact">
									<input type="hidden" name="recipients" value="qg+GNtczhWv+lXFqS9DnsJbtaFZuSAKQ69TgQrB1a7M=">
									<input type="hidden" name="user_recipients" value="7147b0902526571c3b5a959fdd87616c">
									<input type="hidden" name="charset" value="">
									<input type="hidden" name="redirect" value="">
									<input type="hidden" name="replyto" value="">
									<input type="hidden" name="site_id" value="1">
									<input type="hidden" name="csrf_token" value="a0a25c166eb2f6eec97bf29f0c09c51ba5ac0621">
								</div>
								<div class="form-group">
									<label for="from" class="col-sm-2 control-label">Your Email:</label>
									<div class="col-sm-10">
										<input type="text" id="from" name="from" class="form-control" size="40" maxlength="35">
										<input type="hidden" id="subject" name="subject" value="ERLC Contact Form">
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="col-sm-2 control-label">Message:</label>
									<div class="col-sm-10">
										<textarea id="message" class="form-control" name="message" rows="12" cols="40"></textarea>
									</div>
								</div>
								<div class="btn-group col-sm-offset-2">
									<input name="submit" type="submit" value="Submit Form" class="btn btn-primary btn-lg">
								</div>
							</form>					
						</section>
						<section id="mailing_addresses" class="block">
							<h2>Press/Media Relations</h2>
							<p><a href="/press/">ERLC.com/Press »</a><br>
								To request an interview, contact <a href="mailto:ebristow@erlc.com">Carrie Kintz</a> at <a href="mailto:press@erlc.com">press@erlc.com</a>.</p>
							<h2>Mailing Addresses</h2>
							<div class="row row-addresses">
								<address>
									<b>Washington Office</b><br>505 Second St., N.E.<br>Washington, DC 20002<br>Phone: (202) 547-8105<br>Fax: (202) 547-8165
								</address>
								<address>
									<b>Nashville Office</b><br>901 Commerce Street, Suite 550<br>Nashville, Tennessee 37203<br>Phone: (615) 244-2495<br>Fax: (615) 242-0065          
								</address>
								<address>
									<b>Middle East Office</b><br>Jacovides Tower<br>81-83, Grivas Digenis Avenue<br>CY-1090 Nicosia<br>Cyprus 
								</address>
							</div>
						</section>
					</article>
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
						    <li class="">
						      <a href="/resource-library/podcasts.php">Podcast Episodes</a>
						    </li>
					      <li>
					        <a href="/resource-library/sermons">Issue Briefs</a>
					      </li>
						    <li>
						      <a href="/resource-library/bulletins">Bulletins</a>
						      
						    </li>
						    <li>
						      <a href="/resource-library/articles">Articles</a>
						    </li>
						    <li>
						      <a href="/resource-library/conference-messages">Conference Messages</a>
						    </li>
						    <li>
						      <a href="/resource-library/seminars">Seminars</a>
						    </li>
						    <li>
						      <a href="/resource-library/policy-and-vision-documents">Policy and Vision Documents</a>
						    </li>
						    <li>
						      <a href="/resource-library/forms">Forms</a>
						    </li>
					    </ul>
					  </section>
					  <section class="share-nav">
					  	<h3 class="text-left">Share this Article</h3>
					  	<ul class="nav nav-pills share share-icons">
								<li><a href="#" class="print" title="Print this Article"><i class="ion-android-print"></i></a></li><li><a href="#" class="facebook" title="Share this Article on Facebook"><i class="ion-social-facebook"></i></a></li><li><a href="#" class="twitter" title="Share this Article on Twitter"><i class="ion-social-twitter"></i></a></li><li><a href="#" class="linkedin" title="Share this Article on LinkedIn"><i class="ion-social-linkedin"></i></a></li><li><a href="#" class="googleplus" title="Share this Article on Google+"><i class="ion-social-googleplus-outline"></i></a></li>
							</ul>
					  </section> 
					</nav>
        </div>
			</div>
		</div>   
	</div>
	</article>
	
	<?php include "includes/footer.php" ?>
  <script async>
  	$(document).ready(function(){
    	$(".nav-item-resource-library").addClass("active");
		});
  </script>
</body>