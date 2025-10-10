@extends('frontend.master')
@section('content')
      <!-- Banner-Section-Start -->
        <section class="banner_section">
            <!-- container start -->
            <div class="container">
                <!-- vertical animation line -->
                <div class="anim_line">
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                    <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
                </div>
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                        <!-- banner text -->
                        <div class="banner_text">
                            <!-- h1 -->
                            <h1>Welcome To <span>life improvemente</span></h1>
                            <!-- p -->
                            <p>It's a Bangladeshi trusted online platform. It is a learning and earning process by using your valuable free time at home through your smart phone only It is a very easy process and you can learn this process on your own mother tongue and you can earn from our community with selling some Courses Services or product.
                            </p>
                        </div>
                        <!-- app buttons -->
                        <ul class="app_btn">
                            <li>
                                <a href="{{url('/login')}}" clas="btn btn-primary">
                                   Login 
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/register')}}" clas="btn btn-primary">
                                    Sign Up 
                                </a>
                            </li>
                        </ul>

                        <!-- users -->
                        
                    </div>

                    <!-- banner slides start -->
                    <div class="col-lg-6 col-md-12" data-aos="fade-in" data-aos-duration="1500">
                        <div class="banner_slider">
                            <div class="item">      
                                <div class="slider_img">
                                    <img src="{{asset('frontend/images/banner3860.webp?v=1')}}" alt="image" style="background-size:cover;">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- banner slides end -->

                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            </section>
            <!-- Banner-Section-end -->
            <section class="row_am why_we_section" data-aos="fade-in" style="background-color: #6a49f2;">
            <div class="why_inner" style="background-color: #ece8fd;">
                <div class="container">
                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <h2><span>Who we </span> are</h2>
                        <p>
                           Three certificates will be issued from here. First certificate after three months of course complete, second certificate after 6 months and third certificate after 1 year of learning and earning in the company.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/secure.png')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>100+ Courses</h3>
                                    <p>In This Platform , Have 6 Or More Courses Which Is Learn Easily And Earned Money. If You Do This Course, You Can Get Jobs In Various It Sectors.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/communication.png')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Expert mentors</h3>
                                    <p>We have talented and good behavior trainers to help teach you the work so that you don't have any difficulty in earning money.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/abt_support.png')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Life time access</h3>
                                    <p>Here you can learn and earn money lifetime.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-App-Section-Start -->

        <!-- Why we are section Start -->
        <section class="row_am why_we_section" data-aos="fade-in" style="background-color: #6a49f2; margin-top:20px;">
            <div class="why_inner" style="background-color: #ece8fd;">
                <div class="container">
                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <h2><span>Our Popular</span> Courses </h2>
                        <p>At life improvemente, we take pride in offering the best online courses in photo editing, video editing, <br> and digital marketing. Here's why our courses stand out:
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/photo3860.webp?v=1')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Photo Edditing</h3>
                                    <p style="text-align:justify;">Unleash your creativity and master the art of photo editing with our comprehensive course. Learn industry-standard techniques, enhance your editing skills, and transform ordinary images into stunning works of art.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/video3860.webp?v=1')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Video Edditing</h3>
                                    <p style="text-align:justify;">Dive into the world of video editing and learn how to craft captivating visual stories. Our course covers the fundamentals of video editing software, advanced editing techniques, and the art of seamless storytelling.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/cottage5e1f.webp?v=2')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3> Graphics design</h3>
                                    <p style="text-align:justify;">Take your  Graphics design photography business to new heights by learning how to build a sustainable and profitable enterprise. Explore topics such as business planning,  for long-term success.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/digital5e1f.webp?v=2')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Digital Marketing</h3>
                                    <p style="text-align:justify;">In today's digital landscape, digital marketing skills are essential. Gain a competitive edge with our Digital Marketing Essentials course. Explore various strategies, and learn how to build effective digital marketing campaigns.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/spoken5e1f.webp?v=2')}}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Spoken English</h3>
                                    <p style="text-align:justify;">Improve your English communication skills with our Spoken English Courses. Designed for learners of all levels, our courses focus on enhancing your speaking, listening, and conversational abilities. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection