@extends('layouts.master')
@section('title', 'Web App Development')
@section('content')

<div class="about-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="about-banner-content">
              <h1>Web App Development</h1>
                <ul>
                  <li class="list-dot"><a href="{{ route('home') }}">Home</a>
                  </li>
                  <li style="margin-left:10px;">Service details</li>
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

<section class="service-section bg-grey ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="overview_content">
          <h2>HTML​ Development Services</h2>
          <p><b>HTML development services</b> create visually appealing and high-performance websites. We specialize in responsive, cross-browser compatible sites with clean HTML markup for enhanced accessibility and search engine visibility. Whether you need a static website, dynamic web app, or e-commerce platform, our services adapt to diverse needs. Following the latest HTML standards, we ensure future-proof websites that excel with evolving technologies.</p><br>
          <p>Customer satisfaction is our priority, and we collaborate closely with clients to deliver tailored solutions aligned with their brand identity and business goals. Choose our HTML development services for efficient, reliable, and innovative solutions that bring your digital vision to life.</p>
        
        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/services/107Z_html_set_Converted-02.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-section  ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/services/php-app.png') }}">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview_content">
          <h2>PHP Development Services</h2>
          <p>At Company, we aim to provide a profitable, real-time business solution. We follow standard business practices before embarking on a PHP project. PHP developers are experts in providing reliable front-end and back-end solutions that provide excellent compatibility with APIs with multiple databases, Internet protocols, and open-source solutions. Our experts have sufficient experience to handle all <b>PHP web development</b> requirements as needed.</p><br>
          <p>It is a leading PHP development company that offers customized <b>PHP web apps development services</b> that seamlessly integrate with new and existing applications using a robust support library.
          <br><br>
          We have a highly efficient team of dedicated PHP developers who have expertise in creating websites and applications ranging from small websites to large enterprise and organization websites, enterprise application development, information forums, chat platforms, CMS solutions, e-commerce shopping carts, and many more.
          </p>

        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="service-section bg-grey ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="overview_content">
          <h2>Node JS Development Services</h2>
          <p>Node.js stands out for its scalability, efficiency, and user-friendly features. As an event-driven asynchronous JavaScript runtime environment. We employ technical Node.JS to provide our customers with end-to-end solutions at competitive market prices.</p><br>
          <p>Build easy-to-use and efficient applications using Node.js’ asynchronous JavaScript runtime environment. Our team uses <b>Node.js</b> for web and mobile to develop customized, cost-effective, and scalable applications.
          <br><br>
          We are Node.JS experts and use the framework to provide development services. Our developers know the benefits of NodeJS and adapt to the development process according to different budgets, ideas, and ways of doing it.
          </p>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/services/Node-Js.svg') }}">
        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="technology-section ptb-100">
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