@extends('layouts.fronend.app')
@section('title')
    Home
@endsection
@section('meta_desc')
    {{ $getSetting->small_desc }}
@endsection
@push('header')
<link rel="canonical" href="{{ url()->full() }}" />
@endpush
@section('body')

<style>
.top-news .tn-img img{object-fit: fill;}
@media (min-width: 1300px) {
    .top-news .tn-img-slid img {
        height: 683px;
        width: 620px;
    }
        .top-news .tn-img-4 img {
        height: 340px;
        width: 320px;
    }
    
}

@media (min-width: 1400px) {
     .top-news .tn-img-slid img {
        height: 683px;
        width: 720px;
    }
        .top-news .tn-img-4 img {
        height: 340px;
        width: 360px;
    }
    
}
@media (min-width: 1600px) {
     .top-news .tn-img-slid img {
        height: 683px;
        width: 800px;
    }
        .top-news .tn-img-4 img {
        height: 340px;
        width: 390px;
    }
    
}
@media (min-width: 1800px) {
    .top-news .tn-img-slid img {
        height: 783px;
        width: 890px;
    }
        .top-news .tn-img-4 img {
        height: 390px;
        width: 460px;
    }
    
}

</style>

@php
    $latest_three_posts = $posts->where('header_pro', 1)->take(3);

@endphp
    <!-- Top News Start-->
    <div class="top-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                       @foreach ($latest_three_posts as $post)
                       <div class="col-md-6">
                        <div class="tn-img tn-img-slid">
                            <img  src="{{ asset($post->images->first()->path) }}" />
                            <div class="tn-title">
                                @if (App::getLocale() == 'ar')
                                <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                @else
                                <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                       @endforeach
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    @php
                        $four_posts = $posts->where('header_pro', 1)->take(4);
                    @endphp
                    <div class="row">
                        @foreach ($four_posts as $post)
                        <div class="col-md-6">
                            <div class="tn-img tn-img-4">
                                <img style="" src="{{ asset($post->images->first()->path) }}" />
                                <div class="tn-title">
                                    @if (App::getLocale() == 'ar')
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                    @else
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->

  <!-- start About -->
<div class="about" id="about">
    <div class="container">
      <h2 class="special-heading">About</h2>
      {{-- <p>NKM </p> --}}
      <div class="about-content">
        <div class="image">
            <img src="{{ asset('assets/frontend/img/18.jpeg') }}" alt="">
        </div>
        <div class="text">
          <p>{{__('home.about text 1')}}</p>
          <hr>
          <br>
          <br>
          <p>{{__('home.about text 2')}}</p> 
        </div>
      </div>
    </div>
  </div>
  <!-- End About -->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container-fluid">
            <div class="row">
                @foreach ($categories_with_posts as $category)
                <div class="col-md-6">
                    @if (App::getLocale() == 'ar')
                    <h2>{{ $category->name_ar }}</h2>

                    @else
                    
                    <h2>{{ $category->name }}</h2>
                    @endif
                    <div class="row cn-slider">
                       @foreach ($category->posts as $post)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img  src="{{ asset($post->images->first()->path) ?? '' }}" />
                                <div class="cn-title">
                                    @if (App::getLocale() == 'ar')
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                    @else
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Category News End-->



    <!-- Tab News Start (finished)-->
    <div class="tab-news">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#featured"> Popular Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#popular"> Oldest Products</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="featured" class="container tab-pane active">
                           @foreach ($gretest_posts_comments as $post )
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img  src="{{asset( asset($post->images->first()->path) )}}" />
                                </div>
                                <div class="tn-title">
                                    @if (App::getLocale() == 'ar')
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }} التعليقات({{ $post->comments_count }})</a>

                                    @else
                                    
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }} comment({{ $post->comments_count }})</a>
                                    @endif
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <div id="popular" class="container tab-pane fade">
                            @foreach ($oldest_news as $post )
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{ asset($post->images->first()->path) ?? '' }}" />
                                </div>
                                <div class="tn-title">
                                    @if (App::getLocale() == 'ar')
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                    @else
                                    <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                    @endif                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#m-viewed">Latest Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#m-read">Most Products</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        {{-- content latest news --}}
                        <div id="m-viewed" class="container tab-pane active">
                           @foreach ($latest_three_posts as $post)
                           <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{ asset($post->images->first()->path) ?? '' }}" />
                            </div>
                            <div class="tn-title">
                                @if (App::getLocale() == 'ar')
                                <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                @else
                                <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                @endif                            </div>
                        </div>
                           @endforeach
                        </div>

                        <div id="m-read" class="container tab-pane fade">
                          @foreach ($gretest_posts_views as $post )
                          <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{ asset($post->images->first()->path) ?? '' }}" />
                            </div>
                            <div class="tn-title">
                                @if (App::getLocale() == 'ar')
                                <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }} ({{ $post->num_of_views }})</a>
                                @else
                                <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }} ({{ $post->num_of_views }})</a>
                                @endif
                            </div>
                        </div>
                          @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab News Start-->

    <!-- Main News Start-->
    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-3 d-flex justify-content-center" style="margin-bottom: 20px">
                                <div class="mn-img">
                                  <img  src="{{ asset($post->images->first()->path) ?? '' }}" />
                                    <div class="mn-title">
                                        @if (App::getLocale() == 'ar')
                                        <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                        @else
                                        <a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                        @endif                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    {{ $posts->links() }}
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>Read More</h2>
                        <ul>
                          @foreach ($read_more_posts as $post)
                          @if (App::getLocale() == 'ar')
                          <li><a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a></li>
                          @else
                          <li><a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a></li>
                          @endif
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection

