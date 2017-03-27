
@extends('layout')

@section('information')
    <!-- main container of all the page elements -->
   
        <div class="main-gallery beans-gallery">
            <div class="beans-mask">
                <div class="beans-slideset">
                    <div class="beans-slide win-height">
                    
                        <div class="bg-stretch bg_image set_index">
                            <div class="container set_margin">
                        <center>
                        <h2 class="set_margin1">Subscribe for our newsletter.</h2>
                        </center>
                        <div class="col-xs-3">
                        </div>

                        <div class="col-xs-5 set_padding">
                        <form>
                        <input type="email" id="email" class=" form-control set_border_radius" name="email" placeholder="Enter your email..." />
                        </div>
                        <div class="col-xs-2 set_padding">
                        <button class="btn btn-danger search_btn set_border_radius" onclick="subscribe();">Submit</button></form>
                        </div>
                        
                    </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
        <!-- contain main informative part of the site -->
        <main id="main">
            <!-- container-block of the page -->
            <section class="container container-block">
                <header class="row main-heading">
                    <div class="col-xs-12">
                        <h2>We Provide you with!</h2>
                    </div>
                </header>
                <!-- services-holder of the page -->
                <div class="row services-holder">
                    <div class="col-sm-4 col-xs-12 services-col">
                        <div class="img-box"></div>
                        <h2><a href="services.html">Legal Services</a></h2>
                        
                        <a href="services.html" class="btn btn-default">Read More +</a>
                    </div>
                    <div class="col-sm-4 col-xs-12 services-col approch">
                        <div class="img-box"></div>
                        <h2><a href="services.html">Free Advice</a></h2>
                        
                        <a href="services.html" class="btn btn-default">Read More +</a>
                    </div>
                    <div class="col-sm-4 col-xs-12 services-col rules">
                        <div class="img-box"></div>
                        <h2><a href="services.html">CA/CS Services</a></h2>
                       
                        <a href="services.html" class="btn btn-default">Read More +</a>
                    </div>
                    
                </div>
            </section>
            <!-- container block practice of the page -->
            <section class="container container-block practice">
                <header class="row main-heading">
                    <div class="col-xs-12">
                        <h2>About Us</h2>
                    </div>
                </header>
                <!-- practice-block of the page -->
                <div class="row practice-block">
                    <div class="col-sm-12 col-xs-12 practice-col">
                        <p class="inc_size"> Har Ghar Vakil is the one stop solution for your legal problems. It aims to become your trusted family lawyer who has solutions to all of your smallest and biggest troubles. Efficiency, transparency and value for money are the three mantras of this online platform. 
We advise clients and provide them with the most appropriate solution. We believe that every individual has a different approach and thus promise to be by them throughout the process. Our panel of lawyers are diverse people from different backgrounds who understand the lacunas in the present system of justice and want to do their bit in making the lives of people easier and hassle-free.
 </p>
                    </div>
                    
                    
                </div>
            </section>
            <!-- news-block of the page -->
            <section class="container container-block news-block">
              
                <div class="row main-heading">
                    <div class="col-xs-12">
                        <h2>Why Choose Us</h2>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-3 col-xs-12 practice-col">
                 
                  <i class="set_style fa fa-check-circle fa-4" aria-hidden="true"></i>
                  <br>
                  <p class="set_size"><strong>Efficiency</strong></p>
                  </div>
                  <div class="col-sm-3 col-xs-12 practice-col">
                  
                  <i class="set_style fa fa-check-circle fa-4" aria-hidden="true"></i>
                  <br>
                  <p class="set_size"><strong>Transparency</strong></p>
                  </div>
                  <div class="col-sm-3 col-xs-12 practice-col">
                  
                  <i class="set_style fa fa-check-circle fa-4" aria-hidden="true"></i> 
                  <br>
                  <p class="set_size"><strong>Value For Money</strong></p>
                  </div>
                  <div class="col-sm-3 col-xs-12 practice-col">
                  
                  <i class="set_style fa fa-check-circle fa-4" aria-hidden="true"></i>
                  <br>
                  <p class="set_size"><strong>Regular Updates</strong></p>
                  </div>
                   
                </div>
            </section>
            <!-- clients-gallery of the Page -->
           
            <!-- container block team of the page -->
            
            
            <section class="container container-block clients2">
                <div class="row">
                    <div class="col-xs-12">
                        <header class="main-heading">
                            <h2>FAQ's</h2>
                        </header>
                    </div>
                </div>
                <!-- our-clients of the Page -->
                <div class="row our-clients">
                    <div class="col-xs-6">
                        <b><p>Q1.wehdewckjwcj fl jfkfjvlfkjvdflkvjfl ldfjvdfk sdfsdfnsd sdvsnvsv</p>
                        <p>A1.asjdcnvnfvfk df df  nfd fdvndfvndf fdvjknfdvkndfvfvdfvvv</p>
                        <p>Q2.wehdewckjwcj fl jfkfjvlfkjvdflkvjfl ldfjvdfkrmfknrnkvreknvnkrekjrvkevenvevekevkjvvenj</p>
                        <p>A2.asjdcnvnfvfk df df  nfd fdvndfvndf fdvjknfdvkn</p>
                        <p>Q3.wehdewckjwcj fl jfkfjvlfkjvdflkvjfl ldfjvdfkdfkmvdddknvvdkndvnkdvkndffkdnvd</p>
                        <p>A3.asjdcnvnfvfk df df  nfd fdvndfvndf fdvjknfdvkn dfkdfvfmklkml</p></b>
                        
                        </div>
                        <div class="col-xs-6">
                        <b><p>Q4.wehdewckjwcj fl jfkfjvlfkjvdflkvjfl ldfjvdfk dvndfvkfj fkjvndfvfknv</p>
                        <p>A4.asjdcnvnfvfk df df  nfd fdvndfvndf fdvjknfdvkn kjefndnkcdsn hjvb</p>
                        <p>Q5.wehdewckjwcj fl jfkfjvlfkjvdflkvjfl ldfjvdfkms vsv ,dfvm fvf,vfvfkdfkfk</p>
                        <p>A5.asjdcnvnfvfk df df  nfd fdvndfvndf fdvjknfdvkn sdklfjjhk efhurkvrvjhrvkh erkjvhkjfvhefkvhfkvfkvfvk</p>
                        <p>Q6.wehdewckjwcj fl jfkfjvlfkjvdflkvjfl ldfjvdfk</p>
                        <p>A6.asjdcnvnfvfk df df  nfd fdvndfvndf fdvjknfdvkn</p>
                        </b>
                       
                    </div>
                </div>
            </section>
        </main>
        <!-- footer-holder of the Page -->
       
@stop