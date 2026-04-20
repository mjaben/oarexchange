@extends('layout.home')
@section('content')
<main>
	<section
	  class="breadcrumb-area breadcrumb-bg"
	  data-background="{{asset('assets/assetss/img/bg/breadcrumb_bg.png')}}"
	>
	  <div class="container">
		<div class="row">
		  <div class="col-lg-12">
			<div class="breadcrumb-content">
			  <h2 class="title" data-aos="fade-down" data-aos-duration="1000">
				How To Trade
			  </h2>
			  <nav
				aria-label="breadcrumb"
				data-aos="fade-up"
				data-aos-duration="2000"
			  >
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.html">Home</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					How To Trade
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="breadcrumb-shape-wrap">
		<img
		  src="{{asset('assets/assetss/img/images/breadcrumb_shape01.png')}}"
		  alt=""
		  class="alltuchtopdown"
		/>
		<img
		  src="{{asset('assets/assetss/img/images/breadcrumb_shape02.png')}}"
		  alt=""
		  class="rotateme"
		/>
	  </div>
	</section>
	<!-- breadcrumb-area-end -->
	<div class="container pt-140">
	  <div class="row justify-content-center">
		<div class="col-lg-8">
		  <div class="blog-details-wrap">
			<div class="blog-details-thumb">
			  <img src="{{asset('assets/assetss/img/payroll.jpeg')}}" alt="" />
			</div>
			<div class="blog-details-content">
			  <h2 class="title" data-aos="flip-down" data-aos-duration="3000">
				Step To Creating A Buy Order
			  </h2>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Click to register, if you are not registered, check your phone
				and email code to verify
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Click Buy Digital Currency
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Select the Digital Currency you want to buy from us
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Select your preferred Payment Method, Instructions will be
				displayed on Order Page.
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Enter your Wallet Address / Account Number CONFIRM Name on
				your Account
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Click Preview Order Base on your Digital Currency Selection
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Verify the Wallet Address and Amount Your Entered is Correct
				and Submit Order
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				You will get payment information DISPLAY including our account
				details in your email.
			  </p>
			  <p class="bullet" data-aos="fade-up" data-aos-duration="1000">
				Upon Successful Submission you will receive an ORDER NUMBER
				which will be used to reference your Payment to complete Your
				Order
			  </p>

			  <blockquote data-aos="zoom-in-up" data-aos-duration="2000">
				<p>
				  Please Note: After Payment is CONFIRMED. Your Order will be
				  Processed within 10 Minutes
				</p>
				<cite>- OAR EXCHANGE</cite>
			  </blockquote>
			  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
				<symbol
				  id="check-circle-fill"
				  fill="currentColor"
				  viewBox="0 0 16 16"
				>
				  <path
					d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
				  />
				</symbol>
				<symbol
				  id="info-fill"
				  fill="currentColor"
				  viewBox="0 0 16 16"
				>
				  <path
					d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
				  />
				</symbol>
				<symbol
				  id="exclamation-triangle-fill"
				  fill="currentColor"
				  viewBox="0 0 16 16"
				>
				  <path
					d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
				  />
				</symbol>
			  </svg>

			  <div
				data-aos="flip-down"
				data-aos-duration="3000"
				class="alert alert-warning d-flex align-items-start"
				role="alert"
			  >
				<svg
				  class="bi flex-shrink-0 me-2"
				  width="24"
				  height="24"
				  role="img"
				  aria-label="Warning:"
				>
				  <use xlink:href="#exclamation-triangle-fill" />
				</svg>
				<div>
				  Please note that we recommend paying directly from your
				  personal bank account or using only one account registered
				  to your profile. Refunds will be issued only after 48 hours.
				</div>
			  </div>

			  <!-- <p>FEEL FREE TO CONTACT US FOR ASSISTANCE VIA WHATSAPP</p> -->

			  <div class="blog-details-bottom">
				<div class="row align-items-center">
				  <div
					class="col-md-7"
					data-aos="fade-right"
					data-aos-duration="1000"
				  >
					<p>Feel Free to Contact Us for Assistance Via WhatsApp</p>
					<!-- <div class="post-tags">
				  <ul class="list-wrap">
					<li><a href="#">Oar exchange</a></li>
					<li><a href="#">Bitcoin</a></li>
					<li><a href="#">currency</a></li>
				  </ul>
				</div> -->
				  </div>
				  <div class="col-md-5">
					<div class="blog-post-share">
					  <ul
						class="list-wrap"
						data-aos="fade-left"
						data-aos-duration="2000"
					  >
						<li>
						  <a href="#"><i class="fab fa-whatsapp"></i></a>
						</li>
						<li>
						  <a href="#"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li>
						  <a href="#"><i class="fab fa-linkedin-in"></i></a>
						</li>
						<li>
						  <a href="#">
							<svg
							  xmlns="http://www.w3.org/2000/svg"
							  width="16"
							  height="16"
							  viewBox="0 0 16 16"
							  fill="none"
							>
							  <path
								d="M10.0596 7.34522L15.8879 0.570312H14.5068L9.44607 6.45287L5.40411 0.570312H0.742188L6.85442 9.46578L0.742188 16.5703H2.12338L7.4676 10.3581L11.7362 16.5703H16.3981L10.0593 7.34522H10.0596ZM8.16787 9.54415L7.54857 8.65836L2.62104 1.61005H4.74248L8.71905 7.29827L9.33834 8.18405L14.5074 15.5779H12.386L8.16787 9.54449V9.54415Z"
								fill="currentColor"
							  ></path>
							</svg>
						  </a>
						</li>
						<li>
						  <a href="#"><i class="fab fa-instagram"></i></a>
						</li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			</div>
        </div>
		</div>
	  </div>
	</div>
	<!--==============================
	RoadMap Area 2
==============================-->
	<div
	  class="pt-130 pb-140 overflow-hidden bg-black2 position-relative z-index-common"
	  id="roadMap"
	  data-aos="zoom-in-up"
	  data-aos-duration="2000"
	>
	  <div class="bg-gradient-2">
		<img src="{{asset('assets/assetss/img/update/bg/bg-gradient1-1.jpg')}}" alt="img" />
	  </div>
	  <div class="container">
		<div class="row justify-content-between">
		  <div class="col-lg-6 col-sm-8">
			<div class="section-title mb-50">
			  <h2
				class="title style2"
				data-aos="fade-down"
				data-aos-duration="1000"
			  >
				Crypto Sales Made Easy
			  </h2>
			</div>
		  </div>
		  <div class="col-sm-auto">
			<div class="icon-box">
			  <button class="slider-arrow prev-btn default">
				<i class="fas fa-arrow-left"></i>
			  </button>
			  <button class="slider-arrow next-btn default">
				<i class="fas fa-arrow-right"></i>
			  </button>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="container-fluid p-0">
		<div class="slider-area position-relative">
		  <div class="row roadMap-active2 roadmap-slider1">
			<div class="col-lg-4">
			  <div class="roadmap-item">
				<span class="roadmap-title">We Offer Premium services</span>
				<div class="roadmap-content">
				  <h4 class="title">
					<span class="dot"></span>Instant Trades
				  </h4>
				  <p>
					Purchase and trade cryptocurrency using naira and perfect
					money within seconds.
				  </p>
				</div>
			  </div>
			</div>
			<div class="col-lg-4">
			  <div class="roadmap-item">
				<span class="roadmap-title">We Offer Premium services</span>
				<div class="roadmap-content">
				  <h4 class="title">
					<span class="dot"></span>Withdraw anytime
				  </h4>
				  <p>
					Same Day Funding & Withdrawal into any Nigerian banks. All
					fees inclusive in the rate.
				  </p>
				</div>
			  </div>
			</div>
			<div class="col-lg-4">
			  <div class="roadmap-item">
				<span class="roadmap-title">We Offer Premium services</span>
				<div class="roadmap-content">
				  <h4 class="title">
					<span class="dot"></span>Premium Market Rates
				  </h4>
				  <p>
					<!-- Cryptocurrency rates experience continual fluctuations,
				whereas  -->
					At OAR Exchange, the exchange rate is determined at the
					moment of the transaction.
				  </p>
				</div>
			  </div>
			</div>
			<div class="col-lg-4">
			  <div class="roadmap-item">
				<span class="roadmap-title">We Offer Premium services</span>
				<div class="roadmap-content">
				  <h4 class="title">
					<span class="dot"></span>24 / 7 Support
				  </h4>
				  <p>
					<!-- Get instant support from our well trained customer service
				team whenever you have any issues. -->
					Access prompt assistance from our skilled customer service
					team for any issues.
				  </p>
				</div>
			  </div>
			</div>
			<div class="col-lg-4">
			  <div class="roadmap-item">
				<span class="roadmap-title">We Offer Premium services</span>
				<div class="roadmap-content">
				  <h4 class="title">
					<span class="dot"></span>Referral Program
				  </h4>
				  <p>
					Share your unique referral link and receive a commission
					for each referral you bring in.
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!--==============================
Faq Area 2
==============================-->
	<div
	  class="pt-140 pb-140 overflow-hidden position-relative z-index-common"
	  data-aos="flip-up"
	  data-aos-duration="3000"
	>
	  <div class="faq-2-shape-1"></div>
	  <div class="container">
		<div class="row justify-content-center">
		  <div class="col-xl-6 text-center">
			<div class="section-title mb-50">
			  <p class="sub-title">FAQ</p>
			  <h2 class="title style2">Freqently Ask Questions?</h2>
			  <!-- <p class="sec-text">
				We’ve worked with over 400 companies to build blockchain
				solutions for their business, and we are still growing.
			  </p> -->
			</div>
		  </div>
		</div>
		<div class="row justify-content-center">
		  <div class="col-lg-10">
			<div class="accordion-area accordion" id="faqAccordion">
			  <div class="accordion-card style2">
				<div class="accordion-header" id="collapse-item-1">
				  <button
					class="accordion-button"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#collapse-1"
					aria-expanded="true"
					aria-controls="collapse-1"
				  >
					How do I start trading cryptocurrencies with Naira on your
					platform?
				  </button>
				</div>
				<div
				  id="collapse-1"
				  class="accordion-collapse collapse show"
				  aria-labelledby="collapse-item-1"
				  data-bs-parent="#faqAccordion"
				>
				  <div class="accordion-body">
					<p class="faq-text">
					  To begin trading, you'll need to sign up for an account
					  on our platform, complete the verification process, Once
					  verified, you can start trading cryptocurrencies against
					  Naira.
					</p>
				  </div>
				</div>
			  </div>
			  <div class="accordion-card style2">
				<div class="accordion-header" id="collapse-item-4">
				  <button
					class="accordion-button collapsed"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#collapse-4"
					aria-expanded="false"
					aria-controls="collapse-4"
				  >
					Can you have more than 1 account?
				  </button>
				</div>
				<div
				  id="collapse-4"
				  class="accordion-collapse collapse"
				  aria-labelledby="collapse-item-4"
				  data-bs-parent="#faqAccordion"
				>
				  <div class="accordion-body">
					<p class="faq-text">
					  No, Every user can only have one account which is
					  verified with their ID document.
					</p>
				  </div>
				</div>
			  </div>
			  <div class="accordion-card style2">
				<div class="accordion-header" id="collapse-item-2">
				  <button
					class="accordion-button collapsed"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#collapse-2"
					aria-expanded="false"
					aria-controls="collapse-2"
				  >
					What cryptocurrencies can I trade against Naira on your
					platform?
				  </button>
				</div>
				<div
				  id="collapse-2"
				  class="accordion-collapse collapse"
				  aria-labelledby="collapse-item-2"
				  data-bs-parent="#faqAccordion"
				>
				  <div class="accordion-body">
					<p class="faq-text">
					  Currently, we support a range of popular
					  cryptocurrencies for trading against Naira, including
					  Bitcoin (BTC), Ethereum (ETH), and others.
					</p>
				  </div>
				</div>
			  </div>

			  <div class="accordion-card style2">
				<div class="accordion-header" id="collapse-item-3">
				  <button
					class="accordion-button collapsed"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#collapse-3"
					aria-expanded="false"
					aria-controls="collapse-3"
				  >
					What fees are associated with buying, selling
					cryptocurrencies with Naira?
				  </button>
				</div>
				<div
				  id="collapse-3"
				  class="accordion-collapse collapse"
				  aria-labelledby="collapse-item-3"
				  data-bs-parent="#faqAccordion"
				>
				  <div class="accordion-body">
					<p class="faq-text">
					  Our fee structure varies depending on the type of
					  transaction and trading volume. We charge a
					  percentage-based fee for each trade, as well as
					  potential withdrawal fees. You can find detailed
					  information about our fees on our website.
					</p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </main>
@endsection