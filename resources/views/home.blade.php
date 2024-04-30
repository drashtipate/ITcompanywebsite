@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div class="home-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <!-- <div class="col-lg-8 col-md-12">
            <div class="main-banner-content">
              <h1>Best IT Solution & Services Company</h1>
              <p>Team up with the best collaboration from the right expertises.</p>
              <div class="banner-btn">
                  <a href="" class="default-btn-one">Read More<span></span><i class="fas fa-arrow-right ms-2"></i></a>
                  <a href="" class="default-btn">Contact us<span style="top: 49px; left: 136.953px;"></span><i class="fas fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div> -->
          <div class="col-lg-6 col-md-12">
            <div class="main-banner-content">
              <h1>Best IT Solution & Services Company</h1>
              <p>Team up with the best collaboration from the right expertises.</p>
              <div class="banner-btn">
                  <a href="{{ route('about') }}" class="default-btn-one">Read More<span></span><i class="fas fa-arrow-right ms-2"></i></a>
                  <a href="{{ route('contact') }}" class="default-btn">Contact us<span style="top: 49px; left: 136.953px;"></span><i class="fas fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="banner-image">
                <img src="{{ asset('front/images/home-font.png')}}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="creative-shape">
    <img src="{{ asset('front/images/home-bottom-shape.png') }}">
  </div>
  <!-- sparking mouse effect -->
  <canvas id="canvas1"></canvas>
</div>

<!-- features -->
<section class="features-section  pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <h6>We Provide Legal And Technical Features</h6>
      <h2>Exclusive Features</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="single-features-box">
          <div class="features-icon">
            <img src="{{ asset('front/images/features-1.png') }}" width="62" height="63">
          </div>
          <div class="features-info">
            <h3>Creative IT Solutions</h3>
            <p>Creative IT Solutions is a native owned company that provides IT Services & Solutions and committed to providing solutions to meet customer’s needs.</p>
            <div clas="features-btn">
              <a class="features-btn-one" href="#">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="single-features-box">
          <div class="features-icon">
            <img src="{{ asset('front/images/features-2.png') }}" width="80" height="80">
          </div>
          <div class="features-info">
            <h3>24/7 Hours Fast Support</h3>
            <p>Emphasize your commitment to providing prompt and efficient customer support, available round the clock.</p>
            <div clas="features-btn">
              <a class="features-btn-one" href="#">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="single-features-box">
          <div class="features-icon">
            <img src="{{ asset('front/images/features-3.png') }}" width="80" height="80">
          </div>
          <div class="features-info">
            <h3>Award Winning Company</h3>
            <p>Showcase your company's achievements and accolades, such as industry awards, recognitions, or certifications. </p>
            <div clas="features-btn">
              <a class="features-btn-one" href="#">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="single-features-box">
          <div class="features-icon">
            <img src="{{ asset('front/images/features-4.png') }}" width="80" height="80">
          </div>
          <div class="features-info">
            <h3>Start to End Security</h3>
            <p>Reassure your customers of your commitment to ensuring the security and privacy of their data and systems.</p>
            <div clas="features-btn">
              <a class="features-btn-one" href="#">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /features -->

<!-- about -->
<section class="about-section bg-grey ptb-100">
  <div class="container">
    <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="about-img-wrapper">
              <img src="{{ asset('front/images/about/about.jpg') }}" alt="about-img" width="640" height="695">
          </div>
        </div>

        <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
          <div class="about-content">
            <div class="about-content-text">
              <h6>Company - Who we are</h6>
              <h2>Best IT-Solutions company near the world</h2>
              <p>specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc.</p>
            </div>
            <div class="about-box">
              <div class="row d-flex align-items-center">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-box-content"> 
                      <div class="about-content-main">
                        <div class="about-box-icon">
                          <div class="icons">
                              <i class="fas fa-lightbulb"></i>
                          </div>
                        </div>
                        <div class="about-box-text">
                          <h3>Web And Mobile Application</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-box-content"> 
                      <div class="about-content-main">
                        <div class="about-box-icon">
                          <div class="icons"> 
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                        <div class="about-box-text">
                          <h3>Improving Our Website</h3>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="hr-line"></div>
            <div class="about-btn">
              <a href="{{ url('/about') }}" class="default-btn">About Us
                <span style="top: 49px; left: 136.953px;"></span><i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- service-->
<section class="service-section  pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <h6>EXPOLRE IT SOLUTIONS</h6>
      <!-- <h2>We run all kinds of service <br>that your success</br></h2> -->
      <!-- <h2>Services offered by most experienced & <br>World Class web professionals.</br></h2> -->
      <h2>We provide the Services offered by most experienced.</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="single-services-box">
          <div class="services-box-content">
            <div class="icon">
              <i class="fas fa-mobile-alt" aria-hidden="true"></i>
            </div>
            <h3><a href="{{ route('mobileapp') }}">Mobile App Development</a></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-services-box">
          <div class="services-box-content">
            <div class="icon">
              <i class="fas fa-globe" aria-hidden="true"></i>
            </div>
            <h3><a href="{{ route('design') }}">UI/UX Design Service</a></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-services-box">
          <div class="services-box-content">
            <div class="icon">
              <i class="fas fa-object-group" aria-hidden="true"></i>

            </div>
            <h3><a href="{{ route('webapp') }}">Web App Development</a></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-services-box">
          <div class="services-box-content">
            <div class="icon">
              <i class="fas fa-anchor" aria-hidden="true"></i>
            </div>
            <h3><a href="#">Unity Development</a></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-services-box">
          <div class="services-box-content">
            <div class="icon">
              <i class="fas fa-search" aria-hidden="true"></i>
            </div>
            <h3><a href="#">IT Consulting</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /service -->

<!-- counter-->
<section class="counter-section ptb-100">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-counter"> 
            <div class="single-counter-inner">
              <div class="counter-icon">
                <i class="fas fa-user"></i>
              </div>  
              <div class="counter_text">
                <h1 class="counter">81</h1>
              </div>
              <div class="counter_title">
                <h4>Happy Clients</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-counter"> 
            <div class="single-counter-inner">
              <div class="counter-icon">
                <i class="fas fa-chart-area"></i>
              </div>  
              <div class="counter_text">
                <h1 class="counter">110</h1>
              </div>
              <div class="counter_title">
                <h4>Clients Project</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-counter"> 
            <div class="single-counter-inner">
              <div class="counter-icon">
                <i class="fas fa-compass"></i>
              </div>  
              <div class="counter_text">
                <h1 class="counter">30</h1>
              </div>
              <div class="counter_title">
                <h4>Experienced Staff</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-counter"> 
            <div class="single-counter-inner">
              <div class="counter-icon">
                <i class="fas fa-glass"></i>
              </div>  
              <div class="counter_text">
                <h1 class="counter">13</h1>
              </div>
              <div class="counter_title">
                <h4>Home Products</h4>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!--/end counter  -->

<!-- why chhose us -->
<section class="why-section bg-grey ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="overview_content">
          <h6>Why Choose Us?</h6>
          <h2>We don't create just design & develop, we create your Dreams</h2>
          <p>We have extraordinarily talented UI/UX designers and developers who have innovative skills and great grasp of how to make world class websites and mobile app.</p>
          <ul class="overview-list">
            <li> 
              <span>
              Impressive Portfolios
              </span>
            </li>
            <li> 
              <span>
              Managed IT Service
              </span>
            </li>
            <li> 
              <span>
              Support
              </span>
            </li>
            <li> 
              <span>
              Plan & Quelity
              </span>
            </li>
            <li> 
              <span>
              Solving IT Problems
              </span>
            </li>
            <li> 
              <span>
              IT Security Services
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/chooseus.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /end why us -->

<!-- Testimonials -->
<section class="testimonials-section ptb-100">
  <div class="container">
    <div class="section-title">
      <h6>TESTIMONIAL</h6>
      <h2>What Our Client Say</h2>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
              <div class="owl-stage">
                <div class="owl-item" style="width:380px;">
                  <div class="col-lg-12">
                    <div class="single_testimonial mt-3 mb-5">
                      <div class="single_testimonial_content">
                        <div class="single_testimonial_content_text mb-4">
                          <p>Great group of people. Professional and effective service. Their success has left me very pleased. All of them have my heartfelt gratitude and best wishes.</p>
                        </div>
                        <div class="single_testimonial_thumb">
                          <img src="{{ asset('/front/images/testimonials/01.jpg')}}">
                        </div>
                        <div class="single_testimonial_content_title mt-4">
                          <h4>Isabel</h4>
                          <span>Designer</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-item" style="width:380px;">
                  <div class="col-lg-12">
                    <div class="single_testimonial mt-3 mb-5">
                      <div class="single_testimonial_content">
                        <div class="single_testimonial_content_text mb-4">
                          <p>Encoders did a fantastic job on my website. They finished on schedule, on budget, and with a cutting-edge design at a fair price. It was the right choice to work with Encoders.</p>
                        </div>
                        <div class="single_testimonial_thumb">
                          <img src="{{ asset('/front/images/testimonials/02.jpg')}}">
                        </div>
                        <div class="single_testimonial_content_title mt-4">
                          <h4>Felicien</h4>
                          <span>CEO & Founder</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-item" style="width:380px;">
                  <div class="col-lg-12">
                    <div class="single_testimonial mt-3 mb-5">
                      <div class="single_testimonial_content">
                        <div class="single_testimonial_content_text mb-4">
                          <p>They were always there for me, came up with brilliant ideas, and finished all on time. Anyone looking for a high-quality website at a reasonable price should consider Voxforem.</p>
                        </div>
                        <div class="single_testimonial_thumb">
                          <img src="{{ asset('/front/images/testimonials/05.jpg')}}">
                        </div>
                        <div class="single_testimonial_content_title mt-4">
                          <h4>Nicky</h4>
                          <span>Web Developer</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- /end Testimonials-->

<!-- Blog -->
<!-- <section class="blog-section bg-grey pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <h6>BLOG & ARTICLE</h6>
      <h2>Our Latest Blogs</h2>
    </div>

    <div class="row">                     
      @forelse ($articles as $article)
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="blog-item">
          <div class="blog-image">
            @if ($article->image != '')
            <a href="#">
              <img src="{{ asset($article->image) }}" style="width:100%">
            </a>
            @endif
          </div>
          <div class="single-blog-item">
            <ul class="blog-list">
              <li>
                <a href="">
                  <i class="fas fa-user-alt"></i>{{ $article->author}}
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fas fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($article->created_at)->format('M d, Y') }}
                </a>
              </li>
            </ul>
            <div class="blog-content">
              <h3><a href="{{ route('blogDetail', $article->id)}}">{{ $article->title}}</a></h3>
              <p></p>
              <div class="blog-btn">
                <a href="{{ route('blogDetail', $article->id)}}" class="blog-btn-one">
                  Read More<i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
        <div class="col-12">
          No articles available for this category.
        </div>
      @endforelse

      <div class="col-12">
        {{ $articles->links() }}
      </div>

    </div>
</section> -->
<!-- /blog -->

<section class="technology-section bg-grey ptb-100">
  <div class="container">
    <div class="section-title">
      <h6>company - technologies</h6>
      <h2>We Use Technologies</h2>
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-12">
        <div class="technology_content">
            <div class="gallery-item">
                <div class="gallery-icon">
                  <img src="{{ asset('/front/images/technology-1.png') }}">
                </div>
            </div>  
        </div>
      </div>
      <div class="col-lg-2 col-md-12">
        <div class="technology_content">
            <div class="gallery-item">
                <div class="gallery-icon">
                  <img src="{{ asset('/front/images/technology-2.png') }}">
                </div>
            </div>  
        </div>
      </div>
      <div class="col-lg-2 col-md-12">
        <div class="technology_content">
            <div class="gallery-item">
                <div class="gallery-icon">
                  <img src="{{ asset('/front/images/technology-3.png') }}">
                </div>
            </div>  
        </div>
      </div>
      <div class="col-lg-2 col-md-12">
        <div class="technology_content">
            <div class="gallery-item">
                <div class="gallery-icon">
                  <img src="{{ asset('/front/images/technology-4.png') }}">
                </div>
            </div>  
        </div>
      </div>
      <div class="col-lg-2 col-md-12">
        <div class="technology_content">
            <div class="gallery-item">
                <div class="gallery-icon">
                  <img src="{{ asset('/front/images/technology-5.png') }}">
                </div>
            </div>  
        </div>
      </div>
      <div class="col-lg-2 col-md-12">
        <div class="technology_content">
            <div class="gallery-item">
                <div class="gallery-icon">
                  <img src="{{ asset('/front/images/technology-6.png') }}">
                </div>
            </div>  
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection