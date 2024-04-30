@extends('layouts.master')
@section('title', 'About')
@section('content')

<div class="about-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="about-banner-content">
              <h1>About Us</h1>
                <ul>
                  <li class="list-dot"><a href="{{ route('home') }}">Home</a>
                  </li>
                  <li style="margin-left:10px;">About</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- sparking mouse effect -->
  <canvas id="canvas1"></canvas>
</div>

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
              <p>However, paying thats full-time IT services and solve creative site providers may be an overlooked and unnecessary expense. A no cost analysis of these computer support and telecomm unication expenses can save companies money.</p>
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

          </div>
        </div>
    </div>
  </div>
</section>

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
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection