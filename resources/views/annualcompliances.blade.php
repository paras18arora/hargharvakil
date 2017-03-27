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
							<h1>annual compliances</h1>
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
    <li class="active"><a class="colorr" data-toggle="tab" href="#whatis">What is Annual Compliances</a></li>
    <li ><a class="colorr" data-toggle="tab" href="#faq">FAQ</a></li>
  </ul>

<div class="tab-content  remove_border">
  <div id="whatis" class="tab-pane fade in active">
					        <p class="aboutuscontent">
						   
                            </p>
						    <br>
						   
  </div>
  <div id="faq" class="tab-pane fade ">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ<br>FAQ</p>
  </div>
</div>
						Every company (PVT or LTD) needs to comply with annual filing with Registrar of Companies (ROC). In our experience not many entrepreneurs are attentive to this requirement, and even if they are, they tend to ignore it, resulting in stringent penalty.<br>
The Companies Act, 1956, the guiding law for companies mandates for every company to file their Balance Sheet and Profit and Loss Account along with the audit report within 30 days from Annual General meeting. The company is also required to file annual return containing information such as the name of the company, its registered office, its principal business activities, capital in the company, details of all the directors and shareholders etc. as on the date of Annual General Meeting within 60 days from the date of Annual General Meeting.<br>
Although Private Limited Company is the most popular form of starting a business, there are various compliances which are required to be followed once your business is incorporated. Managing the day to day operations of your business along with complying the corporate laws can be little taxing for any entrepreneur. Hence, it is essential to take help of a professional and also understand such legal requirements to ensure timely fulfilment of compliances, without any levy of interest or penalty, we provide you this professional help in completing all the formalities of your annual compliances in no time.

						
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
                            <button type="submit" id="submit" onclick="send_data();" name="submit" class="form-btn semibold">Submit</button> 

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