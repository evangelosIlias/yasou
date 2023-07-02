@extends('frontend.main_master')
@section('main')


<!-- intro section
================================================== -->
   <section id="intro">   

    <div class="intro-overlay"></div>	

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <h5>Lets create something amazing!!</h5>
                <h1>I'm Evangelos Ilias </h1>

                <p class="intro-position">
                    <span>Junior PHP | Laravel Developer</span>
                    
                </p>

                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

            </div>  
            
        </div>   		 		
    </div> <!-- /intro-content --> 

    <ul class="intro-social">        
      <li><a href="https://www.linkedin.com/in/evangelos-ilias-a24979110/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
   </ul> <!-- /intro-social -->      	

</section> <!-- /intro -->

<!-- about section
   ================================================== -->
   <section id="about">  

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About me</h5>
            <h1>Let me introduce myself</h1>

            <div class="intro-info">

                <img src="frontend/assets/img/beach.jpeg" alt="Profile Picture">

                <p class="lead">Hi, I'm Evangelos, a junior back-end PHP developer with a strong focus in Laravel. 
                    With a background in Geographic Information Systems (GIS), I made a career shift into the coding world, 
                    pursuing my passion for developing robust web applications. I specialize in leveraging the power of Laravel 
                    framework to build efficient and scalable back-end solutions. With expertise in PHP and database management, 
                    I excel in crafting RESTful APIs, handling data retrieval, and implementing secure authentication systems.
                    I thrive on problem-solving and enjoy tackling complex challenges in the development process. Continuously 
                    learning and staying up-to-date with the latest trends and advancements in Laravel and PHP is my priority.
                    I take pride in delivering high-quality code, writing unit tests,
                    and ensuring the stability and reliability of the applications I develop.
                    I'm passionate about creating innovative solutions and always ready to take on new projects. Let's connect and bring your ideas to life!"</p>
            </div>   			

        </div>   		
    </div> <!-- /section-intro -->

    

            
</section> <!-- /process-->    





 <!-- Portfolio Section
================================================== -->
 <section id="portfolio">

     <div class="row section-intro">
        <div class="col-twelve">

            <h5>Portfolio</h5>
            <h1>Check Out Some of My Works.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

        </div>   		
    </div> <!-- /section-intro--> 

    <div class="row portfolio-content">

        <div class="col-twelve">

            <!-- portfolio-wrapper -->
          <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

              <div class="bgrid folio-item">
                <div class="item-wrap">
                    <img src="images/portfolio/liberty.jpg" alt="Liberty">
                   <a href="#modal-01" class="overlay">	                  	           
                      <div class="folio-item-table">
                          <div class="folio-item-cell">
                                     <h3 class="folio-title">Liberty</h3>	     					    
                                       <span class="folio-types">
                                           Graphic Design
                                     </span>
                                 </div>	                      	
                      </div>                    
                   </a>
                </div>	               
                 </div> <!-- /folio-item -->

                 <div class="bgrid folio-item">
                     <div class="item-wrap">
                            <img src="images/portfolio/shutterbug.jpg" alt="Shutterbug">
                                <a href="#modal-02" class="overlay">              		                  
                                 <div class="folio-item-table">
                                      <div class="folio-item-cell">
                                          <h3 class="folio-title">Shutterbug</h3>	     					    
                                      <span class="folio-types">
                                           Web Design
                                      </span>		     		
                                      </div> 	                      	
                                 </div>                    
                             </a>
                     </div>
                 </div> <!-- /folio-item -->

             <div class="bgrid folio-item">
                <div class="item-wrap">
                    <img src="images/portfolio/clouds.jpg"alt="Clouds">
                   <a href="#modal-03" class="overlay">             		                  
                      <div class="folio-item-table">
                          <div class="folio-item-cell">
                              <h3 class="folio-title">Clouds</h3>	     					    
                                      <span class="folio-types">
                                           Web Design
                                    </span>		     		
                                 </div> 	                      	
                      </div>                    
                   </a>
                </div>
                 </div> <!-- /folio-item -->

             <div class="bgrid folio-item">
                <div class="item-wrap">
                    <img src="images/portfolio/beetle.jpg" alt="Beetle">
                   <a href="#modal-04" class="overlay">                  	                 
                      <div class="folio-item-table">
                          <div class="folio-item-cell">
                              <h3 class="folio-title">Beetle</h3>	     					    
                                      <span class="folio-types">
                                           Branding
                                    </span>		     		
                                 </div>  	                      	
                      </div>                    
                   </a>
                </div>
                 </div> <!-- /folio-item -->     

                 <div class="bgrid folio-item">
                <div class="item-wrap">
                    <img src="images/portfolio/lighthouse.jpg" alt="Lighthouse">
                   <a href="#modal-05" class="overlay">             		                  
                      <div class="folio-item-table">
                          <div class="folio-item-cell">
                              <h3 class="folio-title">Lighthouse</h3>	     					    
                                      <span class="folio-types">
                                           Web Development
                                    </span>		     		
                                 </div> 	                      	
                      </div>                    
                   </a>
                </div>
                 </div> <!-- /folio-item -->

             <div class="bgrid folio-item">
                <div class="item-wrap">
                    <img src="images/portfolio/salad.jpg" alt="Salad">
                   <a href="#modal-06" class="overlay">
                      <div class="folio-item-table">
                          <div class="folio-item-cell">
                              <h3 class="folio-title">Salad</h3>	     					    
                                      <span class="folio-types">
                                           Branding
                                    </span>		     		
                                 </div>	                      	
                      </div>                    
                   </a>
                </div>
                 </div> <!-- /folio-item -->   

             <!-- modal popups - begin
             ============================================================= -->
             <div id="modal-01" class="popup-modal slider mfp-hide">	

                      <div class="media">
                          <img src="images/portfolio/modals/m-liberty.jpg" alt="" />
                      </div>      	

                    <div class="description-box">
                       <h4>Liberty</h4>		      
                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                       <div class="categories">Web Development</div>			               
                    </div>

                  <div class="link-box">
                     <a href="http://www.behance.net">Details</a>
                       <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>		      

                </div> <!-- /modal-01 -->

                <div id="modal-02" class="popup-modal slider mfp-hide">	

                      <div class="media">
                          <img src="images/portfolio/modals/m-shutterbug.jpg" alt="" />
                      </div>      	

                    <div class="description-box">
                       <h4>Shutterbug</h4>		      
                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                       <div class="categories">Web Design</div>			               
                    </div>

                  <div class="link-box">
                     <a href="http://www.behance.net">Details</a>
                       <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>		      

                </div> <!-- /modal-02 -->

                <div id="modal-03" class="popup-modal slider mfp-hide">	

                      <div class="media">
                          <img src="images/portfolio/modals/m-clouds.jpg" alt="" />
                      </div>      	

                    <div class="description-box">
                       <h4>Clouds</h4>		      
                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                       <div class="categories">Web Design</div>			               
                    </div>

                  <div class="link-box">
                     <a href="http://www.behance.net">Details</a>
                       <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>		      

                </div> <!-- /modal-03 -->

                <div id="modal-04" class="popup-modal slider mfp-hide">	

                      <div class="media">
                          <img src="images/portfolio/modals/m-beetle.jpg" alt="" />
                      </div>      	

                    <div class="description-box">
                       <h4>Beetle</h4>		      
                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                       <div class="categories">Branding</div>			               
                    </div>

                  <div class="link-box">
                     <a href="http://www.behance.net">Details</a>
                       <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>		      

                </div> <!-- /modal-04 -->

                <div id="modal-05" class="popup-modal slider mfp-hide">	

                      <div class="media">
                          <img src="images/portfolio/modals/m-lighthouse.jpg" alt="" />
                      </div>      	

                    <div class="description-box">
                       <h4>Lighthouse</h4>		      
                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                       <div class="categories">Web Development</div>			               
                    </div>

                  <div class="link-box">
                     <a href="http://www.behance.net">Details</a>
                       <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>		      

                </div> <!-- /modal-05 -->

                <div id="modal-06" class="popup-modal slider mfp-hide">	

                      <div class="media">
                          <img src="images/portfolio/modals/m-salad.jpg" alt="" />
                      </div>      	

                    <div class="description-box">
                       <h4>Salad</h4>		      
                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                       <div class="categories">Branding</div>			               
                    </div>

                  <div class="link-box">
                     <a href="http://www.behance.net">Details</a>
                       <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>		      

                </div> <!-- /modal-06 -->


                <!-- modal popups - end
             ============================================================= -->

          </div> <!-- /portfolio-wrapper --> 

        </div>  <!-- /twelve -->   

    </div> <!-- /portfolio-content --> 
     
 </section> <!-- /portfolio --> 


 <!-- CTA Section
================================================== -->
 <section id="cta" class="grey-section">

    <div class="row cta-content">

        <div class="col-twelve section-ads">  

              <h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

           <p class="lead">
           Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
             Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
             <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
             </p>

             <div class="action">
               <a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
           </div>		     	

        </div>

    </div> <!-- /cta-content -->

</section> <!-- /cta --> 

 
 <!-- services Section
================================================== -->
 <section id="services">

     <div class="overlay"></div>

     <div class="row section-intro">
        <div class="col-twelve">

            <h5>Services</h5>
            <h1>What Can I Do For You?</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

        </div>   		
    </div> <!-- /section-intro -->

    <div class="row services-content">

        <div id="owl-slider" class="owl-carousel services-list">

           <div class="service">	

               <span class="icon"><i class="icon-earth"></i></span>            

             <div class="service-content">	

                  <h3>Webdesign</h3>

                 <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                  </p>
                  
              </div> 	         	 

             </div> <!-- /service -->

             <div class="service">	

                 <span class="icon"><i class="icon-window"></i></span>                          

             <div class="service-content">	

                 <h3>Web Development</h3>  

                 <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                  </p>

             </div>	                          

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-paint-brush"></i></span>		            

             <div class="service-content">

                 <h3>Branding</h3>

                 <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                     </p> 

             </div> 	            	               

            </div> <!-- /service -->

             <div class="service">

                 <span class="icon"><i class="icon-toggles"></i></span>	              

             <div class="service-content">

                 <h3>UI/UX Design</h3>

                 <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                  </p> 
                  
             </div>                

             </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-image"></i></span>	            

             <div class="service-content">

                 <h3>Graphics Design</h3>

                 <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                     </p> 

             </div>	               

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-chat"></i></span>	   	           

             <div class="service-content">

                  <h3>Consultancy</h3>

                 <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                     </p> 
                     
             </div>	               

            </div> <!-- /service -->

       </div> <!-- /services-list -->
        
    </div> <!-- /services-content -->
     
 </section> <!-- /services -->	


 <!-- stats Section
================================================== -->
 <section id="stats" class="count-up">

     <div class="row">
         <div class="col-twelve">

             <div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

                 <div class="bgrid stat">

                     <div class="icon-part">
                         <i class="icon-pencil-ruler"></i>
                     </div>

                     <h3 class="stat-count">
                         1500
                     </h3>

                     <h5 class="stat-title">
                         Projects Completed
                     </h5>

                 </div> <!-- /stat -->					

                 <div class="bgrid stat">

                     <div class="icon-part">
                         <i class="icon-users"></i>
                     </div>

                     <h3 class="stat-count">
                         900
                     </h3>

                     <h5 class="stat-title">
                         Happy Clients
                     </h5>

                 </div> <!-- /stat -->

                 <div class="bgrid stat">

                     <div class="icon-part">
                         <i class="icon-badge"></i>
                     </div>

                     <h3 class="stat-count">
                         200
                     </h3>

                     <h5 class="stat-title">
                         Awards Received
                     </h5>

                 </div> <!-- /stat -->									

                 <div class="bgrid stat">

                     <div class="icon-part">
                         <i class="icon-light-bulb"></i>
                     </div>

                     <h3 class="stat-count">
                         120
                     </h3>

                     <h5 class="stat-title">
                         Crazy Ideas
                     </h5>

                 </div> <!-- /stat -->

                 <div class="bgrid stat">

                     <div class="icon-part">
                         <i class="icon-cup"></i>
                     </div>

                     <h3 class="stat-count">
                         1500
                     </h3>

                     <h5 class="stat-title">
                         Coffee Cups
                     </h5>

                 </div> <!-- /stat -->

                 <div class="bgrid stat">

                     <div class="icon-part">
                         <i class="icon-clock"></i>
                     </div>

                     <h3 class="stat-count">
                         7200
                     </h3>

                     <h5 class="stat-title">
                         Hours
                     </h5>

                 </div> <!-- /stat -->

             </div> <!-- /stats-list -->

         </div> <!-- /twelve -->
     </div> <!-- /row -->

 </section> <!-- /stats -->

 
<!-- contact
================================================== -->
 <section id="contact">

     <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

        </div> 
    </div> <!-- /section-intro -->

    <div class="row contact-form">

        <div class="col-twelve">

         <!-- form -->
         <form name="contactForm" id="contactForm" method="post" action="">
               <fieldset>

               <div class="form-field">
                         <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
               </div>
               <div class="form-field">
                      <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                </div>
               <div class="form-field">
                         <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                </div>                       
               <div class="form-field">
                      <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                </div>                      
              <div class="form-field">
                  <button class="submitform">Submit</button>
                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>                             
                          <div class="s-loader">
                                   <div class="bounce1"></div>
                                   <div class="bounce2"></div>
                                   <div class="bounce3"></div>
                             </div>
                         </div>
               </div>

               </fieldset>
           </form> <!-- Form End -->

         <!-- contact-warning -->
         <div id="message-warning">            	
         </div>            
         <!-- contact-success -->
           <div id="message-success">
            <i class="fa fa-check"></i>Your message was sent, thank you!<br>
           </div>

      </div> <!-- /col-twelve -->
        
    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>
         1600 Amphitheatre Parkway<br>
         Mountain View, CA<br>
         94043 US
         </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>someone@kardswebsite.com<br>
                info@kardswebsite.com			     
            </p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>Phone: (+63) 555 1212<br>
                Mobile: (+63) 555 0100<br>
                  Fax: (+63) 555 0101
            </p>

        </div>
        
    </div> <!-- /contact-info -->
     
 </section> <!-- /contact -->

 @endsection