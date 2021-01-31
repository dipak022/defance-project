@extends('layouts.frontend.link')

@section('body')
@php 
    $slidder=DB::table('slidder')
        ->orderBy('id','DESC')->limit(3)->get();
        $blog=DB::table('blog')
        ->orderBy('id','DESC')->limit(1)->get();

        $chefs=DB::table('chefs')
        ->orderBy('id','DESC')->limit(6)->get(); 
        $menus=DB::table('menus')
        ->orderBy('id','DESC')->limit(9)->get();

@endphp

{{-- @foreach($slidder as $row)
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

               <img src="{{ asset($row->image) }}">
                   
                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Live Cooking &amp; Station</h3>
                                             <h1>{{ $row->title }}</h1>
                                             <a href="/Chef" class="section-btn btn btn-default smoothScroll">{{ $row->description }}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         

                    </div>
                   

          </div>
     </section>
      @endforeach --}}

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

               <img src="">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Live Cooking &amp; Station</h3>
                                             <h1>Our mission is to provide an unforgettable experience</h1>
                                             <a href="/Chef" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Breakfast</h3>
                                             <h1>The best Taste quality can be here too!</h1>
                                             <a href="/Menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>New Cooking ship in Town</h3>
                                             <h1>Enjoy our special menus every Sunday and Friday</h1>
                                             <a href="/Contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>
      {{-- <section class="page_slider">
        
        <div class="flexslider">
            <ul class="slides">
                @foreach($slidder as $row)
                <li class="ds cover-image">
                    <img src="{{ $row->image }}" alt="img">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer">
                                           
                                            <h6 class="intro_before_featured_word"> {{ $row->name }} </h6>
                                            <h2 class="text-capitalize intro_featured_word">
                                                 {{ $row->description }} 
                                            </h2>
                                            <a href="#" class="btn btn-outline-darkgrey big-btn"> {{ $row->btn_name }} </a>
                                            <span class="text-divider">or</span>
                                            <a href="#" class="btn just-link"> {{ $row->short_description }} </a>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div> 
    </section> --}}


     <!-- ABOUT -->
     @foreach($blog as $row)
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   
                                   <h2>{{ $row->title }}</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>{{ $row->description }}.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="{{ $row->image }}" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
     @endforeach


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Meet our chefs</h2>
                              <h4>They are nice &amp; friendly</h4>
                         </div>
                    </div>
                    @foreach($chefs as $row)
                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="{{ asset($row->image)  }}" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Duis vel lacus id magna mattis vehicula</h4> 
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>{{ $row->title }}</h3>
                              <p>{{ $row->description }}</p>
                         </div>
                    </div>
                    @endforeach
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Tea Time &amp; Dining</h4>
                         </div>
                    </div>
                    @foreach($menus as $row)
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         
                         <div class="menu-thumb">
                              <a href="#" class="image-popup" title="American Breakfast">
                                   <img src="{{  asset($row->image)  }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>{{ $row->name }}</h3>
                                             {{-- <p>Tomato / Eggs / Sausage</p> --}}
                                        </div>
                                        <div class="menu-price">
                                             <span>{{ $row->price }}</span>
                                        </div>
                                   </div>
                              </a>
                         </div>

                    </div>
                    @endforeach

                   
                  



               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>I swear to God, they are the best brownies I have ever eaten. Thanks, and I love the website!</p>
                                        <div class="tst-author">
                                             <h4>Abdur Rahman</h4>
                                             <span>City Council Member</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>We all eat, and it would be a sad waste of opportunity to eat badly</p>
                                        <div class="tst-author">
                                             <h4>Johnny </h4>
                                             <span>Doctor at D.M.C.</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>You don't need a silver fork to eat good food.</p>
                                        <div class="tst-author">
                                             <h4>Jessika</h4>
                                             <span>Member of DIU</span>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>

     @endsection          


     