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
							<h1>Will</h1>
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
    <li class="active"><a class="colorr" data-toggle="tab" href="#whatis">What is Will</a></li>
    <li ><a class="colorr" data-toggle="tab" href="#faq">FAQ</a></li>
  </ul>

<div class="tab-content  remove_border">
  <div id="whatis" class="tab-pane fade in active">
					        <p class="aboutuscontent">
						   A will is a legal document that coordinates the distribution of your assets after death and can appoint guardians for minor children. A will is important to have, as it allows you to communicate your wishes clearly and precisely. It is testamentary instrument by which a person makes disposition of his property to take effect after his death, and which, in its own nature, is ambulatory and revocable during his life. Thus, a Will can be changed by the executants as and when he so likes. It is a secret and confidential document which the executants is never ordered to produce.<br> 
A will generally includes:<br>
<ul><li>  Designation of an executor, who carries out the provisions of the will.</li>
<li>   Beneficiaries—those who are inheriting the assets.</li>
<li>  Instructions for how and when the beneficiaries will receive the assets.</li>
<li>   Guardians for any minor children.</li></ul><br>
A will must be intended to come into effect after the death of the testator and must be revocable by the testator at any time. Drafting the same shall be done carefully and we provide you with expert help to draft your wills in the best manner. 


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