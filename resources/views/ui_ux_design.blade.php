@extends('layouts.master')
@section('title', 'UI/UX Design')
@section('content')

<div class="about-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="about-banner-content">
              <h1>UI/UX Design</h1>
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
          <h2>Mobile App Design</h2>
          <p>Design is the first thing that people see when visiting a <b>Mobile App</b>. You might not retain most of your users even if your software functions well. This depends on the design of your app. To serve a maximum audience, our applications use responsive design to serve a wide range of devices. Whether it’s iOS, Android, or a hybrid platform, we create designs that adhere to the design guidelines set by Apple and Google. Our team of <b>UI/UX design</b> is dedicated to crafting custom interface designs, aligning with the unique requirements of each client. Our overarching goal is to design products that not only meet businesses’ expectations but also fulfill the specific requirements and preferences of the end users.</p>
        
        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/services/userdesignnew.webp') }}">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-section ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/services/Graphic-Designing.jpg') }}">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview_content">
          <h2>Web Design</h2>
          <p>Web Apps require more care since they run over the internet. You should design your web application to be consistent, and compatible with mobile devices, and ensure the server does not perform slow. In addition to using the latest technologies, we create new, high-performance websites with cross-platform compatibility using <b>JavaScript, PHP, JQuery, HTML,</b> etc. Cross-platform compatibility is essential for creating unique, high-performance websites. You will benefit from our data-driven UX and UI designers as we help you design user-friendly websites. As impressive design elements engage users and give you an edge over your competitors, they contribute to the growth of your business.</p>

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
          <h2>Graphics Design</h2>
          <p>It is equally important to consider how a system looks and feels as well as the overall roadmap design and information architecture.</p><br>
          <p>Graphic designers use various tools and techniques to create visual content for a wide range of mediums, including print, digital platforms, and multimedia presentations. The goal of <b>graphic design</b> is to convey a specific message or evoke a particular response by combining visual elements in a harmonious and effective way. It plays a crucial role in branding, marketing, and communication, helping to shape the visual identity of businesses, products, or services. Graphic designers often work with clients to understand their objectives and create designs that effectively convey the desired message to a target audience.</p>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="overview-image">
            <img src="{{ asset('front/images/services/user-interface.png') }}">
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