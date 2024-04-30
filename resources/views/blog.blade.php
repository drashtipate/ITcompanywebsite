@extends('layouts.master')
@section('title', 'Blog')
@section('content')

<div class="about-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="about-banner-content">
              <h1>Blog</h1>
                <ul>
                  <li class="list-dot"><a href="{{ route('home') }}">Home</a>
                  </li>
                  <li style="margin-left:10px;">Blog</li>
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

<section class="blog-section ptb-100">
  <div class="container">
    <div class="row">
        <!-- <div class="col-lg-9">
          <div class="me-lg-4">
            <div class="row gy-5"> -->
                            <!-- if ($articles->isNotEmpty()) -->
                                @forelse ($articles as $article)
                                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade">
                                    <div class="blog-item">
                                        <div class="blog-image post-slider slider-sm ">
                                            @if ($article->image != '')
                                                  <img src="{{ asset($article->image) }}" alt="Post Thumbnail" style="width:100%">
                                              @endif
                                        </div>
                                        <div class="single-blog-item pt-4">
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
                                                <h3><a href="{{ route('blogDetail', $article->id)}}">{{ $article->title}}</a></h2>
                                                <div class="blog-btn">
                                                  <a href="{{ route('blogDetail', $article->id)}}" class="blog-btn-one">Read More
                                                      <span>
                                                        <i class="fas fa-arrow-right"></i>
                                                      </span>
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
                            <!-- endif -->
                            
                            <div class="col-12">
                                {{ $articles->links() }}
                            </div>
            <!-- </div>
          </div>
        </div> -->

    </div>
  </div>    
</section>

@endsection
