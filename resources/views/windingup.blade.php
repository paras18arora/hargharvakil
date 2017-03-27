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
							<h1>Winding Up</h1>
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
    <li class="active"><a class="colorr" data-toggle="tab" href="#whatis">What is Winding Up</a></li>
    <li ><a class="colorr" data-toggle="tab" href="#faq">FAQ</a></li>
  </ul>

<div class="tab-content  remove_border">
  <div id="whatis" class="tab-pane fade in active">
					        <p class="aboutuscontent">
						  The Companies Act 1956 defines the process by which the company is put to an end that is the process through which its corporate existence is ended and it is thereafter finally dissolved. The Companies Act defines this process as “winding up”. It is submitted that winding up is different from dissolution of company and it is winding up that leads to dissolution of the company. Winding up holds a very important place in company matters as it is not only a process that leads to end of a company but has in today’s time also emerged as process or a tool in the hands of creditors who can recover debts and contributory or a shareholder who is of the opinion that the company is not being run in the interest of the same can seek winding up and claim their respective shares in most transparent and fair manner.  Part VII of the Act mentions about winding up. The Act does not define winding up but the provisions under the above mentioned part tries to describe the process of winding up and a conclusion can be drawn that, it is process that leads to bringing an end to the company existence. Winding up is a process that initiates the process for dissolution of the company and finally leads to dissolution of the company whereby the company loses its legal personality and is no longer capable of functioning or being recognized as an entity.<br>
Winding up can be made by the following two modes:<br>
<ul>
<li>   Winding up under supervision of the tribunal or compulsory winding up.</li>
<li>  Voluntary winding up.</li></ul><br>
Once you get in touch with us, we help you out in making the complicated process of winding up your business a hassle-free procedure for you.


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