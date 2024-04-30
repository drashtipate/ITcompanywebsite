@extends('layouts.master')
@section('title', 'BlogDetail')
@section('content')

<div class="about-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="about-banner-content">
              <h1>Blog Details</h1>
                <ul>
                  <li class="list-dot"><a href="{{ route('home') }}">Home</a>
                  </li>
                  <li style="margin-left:10px;">Blog datails</li>
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

<div class="blog-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-lg-10">
                    @if ($article->image != '')
                        <div class="mb-5 text-center blog-posts">
                            <div class="post-slider  overflow-hidden">
                                <!-- <img loading="lazy" decoding="async" src="images/blog/post-4.jpg" alt="Post Thumbnail"> -->

                                <img  src="{{ asset($article->image) }}" alt="Post Thumbnail" width="50%">
                            
                            </div>
                        </div>
                    @endif
                    <div class="mb-5 text-center">
                        <h4 class="mb-4" style="line-height:1.5">{{ $article->title }}</h4>
                        <span>{{ \Carbon\Carbon::parse($article->created_at)->format('M d, Y') }} <span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#!" class="ml-1" style="color: #0959a5">{{ $article->category_name }} </a> </p>
                        <p class="list-inline-item">Author : <a href="#!" class="ml-1" style="color: #0959a5">{{ $article->author }} </a> </p>
                        <!-- <p class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!" class="ml-1">Image </a> </p> -->
                    </div>
                    
                    <div class="content">
                        <!-- <h4 id="heading-example">Heading example</h4> -->
                        {!! $article->content !!}
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection