@extends('layouts.master')
@section('title', 'contact')
@section('content')

<div class="about-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="about-banner-content">
              <h1>Contact Us</h1>
                <ul>
                  <li class="list-dot"><a href="{{ route('home') }}">Home</a>
                  </li>
                  <li style="margin-left:10px;">Contact Us</li>
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

<section class="contact-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact-content">
                    <div class="content-heading">
                        <h3>Get In Touch</h3>
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-envelope"></i>
                        <div class="text-info">
                            <h6>Email</h6>
                            <span>
                                <a href="mailto:">info@company.com</a>
                            </span>
                        </div>
                        
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-phone"></i>
                        <div class="text-info">
                            <h6>Phone</h6>
                            <span>
                                <a href="tel:+012345678999">+012 (3456) 789 99</a>
                            </span>
                        </div>
                        
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-map-marker"></i>
                        <div class="text-info">
                            <h6>Address</h6>
                            <span>
                                <a href="https://www.google.com/maps/place/Weblancer+Technologies+%7C+Best+IT+Company+in+Surat,+India+%7C+College+Internship+Company+in+Surat+%7C+Best+IT+Company+in+Adajan/@21.1903539,72.7598934,14z/data=!4m10!1m2!2m1!1scompany+technology+adajan!3m6!1s0x3be04e8160ac9ba9:0xf59ae567c9979f1a!8m2!3d21.1987204!4d72.808074!15sChljb21wYW55IHRlY2hub2xvZ3kgYWRhamFuWhsiGWNvbXBhbnkgdGVjaG5vbG9neSBhZGFqYW6SARBzb2Z0d2FyZV9jb21wYW554AEA!16s%2Fg%2F11l2z_g2pg?entry=ttu" target="_blank">Company Technology, 455 Park Street, Adajan, Surat, Gujarat</a>
                            </span>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="contact-form">
                    <form action="{{ route('send.email') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-4 pb-2">
                                <label for="name" class="form-label">Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control  shadow-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6 mb-4 pb-2">
                                <label for="email" class="form-label">Email address <span style="color:red">*</span></label>
                                    <input type="email" class="form-control  shadow-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-4 pb-2">
                                <label for="phonenumber" class="form-label">Phone Number <span style="color:red">*</span></label>
                                    <input type="text" class="form-control  shadow-none @error('phonenumber') is-invalid @enderror" name="phonenumber" >
                                    @error('phonenumber')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6 mb-4 pb-2">
                                <label for="subject" class="form-label">Subject <span style="color:red">*</span></label>
                                    <input type="text" class="form-control  shadow-none @error('subject') is-invalid @enderror" name="subject">
                                    @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                            <div class="form-group mb-4 pb-2">
                                <label for="message" class="form-label">Write Message <span style="color:red">*</span></label>
                                    <textarea  class="form-control  shadow-none @error('message') is-invalid @enderror" name="message" rows="3"></textarea> 
                                    @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <button class="btn default-btn contact-btn w-100" type="submit">
                                Send Message<span style="top: 49px; left: 136.953px;"></span>
                            </button>
                            <div>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session()->has('danger'))
                                    <div class="alert alert-danger">
                                        {{ session('danger') }}
                                    </div>
                                @endif
                                
                            </div>          
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection