<?php 
/* Template Name: Home Page */ 
get_header();
?>

		<!-- HERO -->
		<div class="hero">
			<video autoplay="true" loop playsinline>
				<source src="<?php echo get_template_directory_uri(); ?>/video/1007431315-preview.mp4" type="video/mp4" poster="<?php echo get_template_directory_uri(); ?>/img/hero-bg-img.jpg" />
			</video>
			<div class="inner clearfix">
				<div class="tagline">
					<h1>Identify &amp; Authenticate</h1>
				</div>
			</div>
		</div>
		<!-- / HERO -->
		
		<!-- ICONS AND TEXT -->
		<section id="digi-identification">
			<div class="inner digi-verification">
				<h2>VERIFIED DIGITAL IDENTIFICATION</h2>
			</div>
			<div class="icons-container">
				<div class="inner clearfix">
					<div class="icon">
						<img src="img/fraud-reduction.svg" />
						<h3>Fraud Detection</h3>
					</div>
					<div class="icon">
						<img src="img/photo-verification.svg" />
						<h3>Photo Verification</h3>
					</div>
					<div class="icon">
						<img src="img/easy-onboarding.svg" />
						<h3>Easy Onboarding</h3>
					</div>
					<div class="icon">
						<img src="img/mobile-ticketing.svg" />
						<h3>Mobile Ticketing</h3>
					</div>
					<div class="icon">
						<img src="img/eliminate-passwords.svg" />
						<h3>Eliminate Passwords</h3>
					</div>
				</div>
			</div>
		</section>
		<!-- / ICONS AND TEXT -->
		
		<!-- PRODUCTS SECTION -->
		<section id="products">
			
			<div class="inner">
				<h2 class="centered-text">PRODUCTS</h2>
			</div>
			
			<div class="parallaxer-container dzsparallaxer auto-init height-is-based-on-content">
				<div class="product-container first divimage dzsparallaxer--target"></div>
				<div class="inner clearfix">
					<div class="first product-info-box">
						<div class="product-icon">
							<img src="img/mobile-ticketing.svg" height="64" width="auto" />
						</div>
						<h3>Nodal Ticket</h3>
						<p>A level of security and trust, easily integrated into your current ticketing solution:</p>
						<ul>
							<li>Eliminate scalping and bot purchases</li>
							<li>Participate in secondary markets</li>
							<li>Guarantee authenticity</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="parallaxer-container dzsparallaxer auto-init height-is-based-on-content">
				<div class="product-container second divimage dzsparallaxer--target"></div>
				<div class="inner clearfix">
					<div class="second product-info-box">
						<div class="product-icon">
							<img src="img/digital-id.svg" width="50" height="auto" />
						</div>
						<h3>Digital ID</h3>
						<p>Multi factor authentication and photo ID to ensure ID legitimacy and create trust:</p>
						<ul>
							<li>Easy KYC and client onboarding</li>
							<li>Process and speed improvement</li>
							<li>Increased security</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="more-products">
				<div class="inner">
					<h2 class="centered-text">Other Offerings</h2>
					<div class="offerings-container clearfix">
						<div class="offering">
							<h3>Nodal Pic</h3>
							<p>Authenticate pictures for process improvement</p>
						</div>
						<div class="offering">
							<h3>Custom Development</h3>
							<p>Easily integrate our API into your custom project</p>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- / PRODUCTS SECTION -->
		
		<!-- NEWS SECTION -->
		<section id="news">
			<div class="inner">
				<h2 class="centered-text">News</h2>
				<div class="news-articles-container">
					<div class="news-article full">
						<img src="img/article-logo-1.svg" />
						<div class="article-content">
							<h3>Blockchain technology developed to sell Spanish National Football tickets</h3>
							<a href="#">Read Article</a>
						</div>
					</div>
					<div class="news-article half">
						<div class="news-article-inner">
							<img src="img/article-logo-2.svg" class="square-logo" />
							<div class="article-content">
								<h3>RFEF to use Blockchain for ticket tracking system</h3>
								<a href="#">Read Article</a>
							</div>
						</div>
					</div>
					<div class="news-article half">
						<div class="news-article-inner">
							<img src="img/article-logo-3.svg" />
							<div class="article-content">
								<h3>ENTREVESTOR: Nodalblock strikes Spanish football deal</h3>
								<a href="#">Read Article</a>
							</div>
						</div>
					</div>
					<a href="#">More Articles</a>
				</div>
			</div>
		</section>
		<!-- / NEWS SECTION -->
		
		<!-- OUR PARTNERSHIPS -->
		<section id="partnerships">
			<div class="inner">
				<h2 class="centered-text">Our Partnerships</h2>
				<ul class="logo-container">
					<li class="partner-logo">
						<img src="img/kpmg.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/medlab.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/neoris.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/finnovating.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/bankia.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/rubricall.svg" />
					</li>
				</div>
			</div>
		</section>
		<!-- / OUR PARTNERSHIPS -->
		
		<?php get_footer(); ?>
