@extends('layouts.fronend.app')
@section('title')
    Search News
@endsection
@section('body')
     <!-- Main News Start-->
     <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="mn-img">
                                  <img src="{{ asset($post->images->first()->path) }}" />
                                    <div class="mn-title">
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
                {{ $posts->links() }}


            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection
