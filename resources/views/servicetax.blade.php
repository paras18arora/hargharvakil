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
							<h1>Service Tax</h1>
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
    <li class="active"><a class="colorr" data-toggle="tab" href="#whatis">What is Service Tax</a></li>
    <li ><a class="colorr" data-toggle="tab" href="#faq">FAQ</a></li>
  </ul>

<div class="tab-content  remove_border">
  <div id="whatis" class="tab-pane fade in active">
					        <p class="aboutuscontent">
						  Service tax is a tax levied by the government on service providers on certain service transactions, but is actually borne by the customers. It is categorized under Indirect Tax and came into existence under the Finance Act, 1994. It is directly levied by the central government and all the taxes collected goes to the central government.<br>
The service tax has to be paid for all the services provided by a provider except some services mentioned in negative list of services. The new tax rate applicable from 1st June 2016 is 15% which includes 14% service tax, 0.5% Swachh Bharat Cess and 0.5% Krishi Kalian Cess. Every service provider is required to apply for service tax registration if the value of services provided by him during the financial year is more than Rs. 9 Lakhs, but the tax would be payable only when the value of services provided is more than Rs. 10 Lakhs.<br>
Every person liable to pay service tax under Reverse Charge, an input service distributor shall exist and the aggregate value of taxable service shall exceed 9 lakhs in a financial year for registration under this within 30 days from the date of commencement of such service or business.<br>
Whereas in case of service provider whose aggregate value of taxable service not exceeded 9 lakhs in a financial year not need to obtain registration, where in case he has obtained registration he is liable to payment of service tax only if the value of taxable services exceeds 10 lakhs rupees. 


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