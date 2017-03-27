@include('ajaxcalls')
@extends('layout')

@section('information')
		<!-- banner-block of the Page -->
		<div class="banner-block">
		<meta name="csrf-token1" content="{!! Session::token() !!}">
   
			<div class="container">
				<div class="row">
					<div class="col-xs-12 banner-box">
						<header class="banner-heading">
							<h1>Passport Renewal</h1>
							<!-- breadcrumbs of the page -->
							
						</header>
					</div>
				</div>
			</div>
			<div class="bg-stretch">
				<img src="/images/img41.jpg" alt="image description">
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- container-block about of the page -->
			<div class="container container-block about">
				<!-- about-block of the page -->
				<div class="row container about-block">
					
					<div class="col-sm-6 col-xs-6 txt-box">
				
				<ul class="nav nav-pills remove_border1 nav-justified">
    <li class="active"><a class="colorr" data-toggle="tab" href="#whatis">What is Passport Renewal</a></li>
    <li ><a class="colorr" data-toggle="tab" href="#faq">FAQ</a></li>
  </ul>

<div class="tab-content  remove_border">
  <div id="whatis" class="tab-pane fade in active">
					        <p class="aboutuscontent">
						   All Indian citizens who depart or intend to depart from India are required to be in possession of a valid passport or travel document. Under the Passports Act 1967, the Government of India may issue different types of passports and travel documents such as Ordinary Passport, Diplomatic Passport, Official Passport, Emergency Certificate and Certificate of Identity for the purpose. Before the period of expiry the passport should be renewed in order to get uninterrupted services.<br>
You can apply for re-issue of passport if you want another passport in lieu of an existing passport for any of the following reasons like change in personal particulars, expiry, exhaustion of pages, damage and others. <br>
Documents required:<br>
<ul><li>   ld passport in original with self-attested photocopy of its first four and last four pages, including ECR/Non-ECR page and the page of observation (if any), made by the Passport Issuing Authority and validity extension page, if any, in respect of short validity passport.</li>
<li>   Proof of present address, such as aadhaar card, water/electricity bill etc (in case the applicant's present address is different from the one mentioned in the passport).</li></ul>
 

                            </p>
						    <br>
						   
  </div>
  <div id="faq" class="tab-pane fade ">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ</p>
  </div>
</div>
						
						
					</div>
					 <div class="inner contact  col-sm-6 col-xs-6">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us">
                    
                        <!-- Left Inputs -->
                        <div class=" wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="number" name="subject" id="subject" required="required" class="form" placeholder="Contact no" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class=" wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="comments"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth">
                            <!-- Send Button -->
                            <p>Please fill in the details and we shall get back to you in less than 48 hours.</p>
                            <button type="submit" id="submit" name="submit" onclick="send_data();" class="form-btn semibold">Submit</button> 

                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
			
			</div>
				</div>
			
			</div>
			<!-- clients-gallery of the Page -->
			
			
			
			
		
		<!-- footer of the Page -->
		
@stop