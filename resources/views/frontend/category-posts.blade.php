@extends('layouts.fronend.app')
@section('title')
    Category {{  $category->name}}
@endsection
@push('header')
<link rel="canonical" href="{{ url()->full() }}" />
@endpush

@section('breadcrumb')
<div class="imageCategory">
    <img src="{{asset('assets/frontend/img/hidder.webp')}}" class="img-fluid" alt="">
</div>
    @parent
    <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
    <li class="breadcrumb-item active">{{ $category->name }}</li>
@endsection

@section('body')
<br><br><br>

     <!-- Main News Start-->
     
     <div class="main-news">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-9">
              <div class="row">
                @forelse ($posts as $post)
                    <div class="col-md-3 d-flex justify-content-center" style="margin-bottom: 20px">
    <div class="mn-img" style="width:100%; height:auto; overflow:hidden; display:flex; align-items:center; justify-content:center;">
        <img src="{{ asset($post->images->first()->path) }}" 
             alt="{{ $post->title }}" 
             style="width:100%; height:100%; object-fit:cover;" />
        <div class="mn-title">
            <a href="{{ route('frontend.post.show',$post->slug) }}" title="{{ $post->title }}">
                {{ $post->title }}
            </a>
        </div>
    </div>
</div>

                @empty
                  <div class="col-lg-12 alert-info">
                    Category is empty
                  </div>
                @endforelse



              </div>
              {{ $posts->links() }}
            </div>

            <div class="col-lg-3">
              <div class="mn-list">
                <h2>Other Categories</h2>
                <ul>
                    @foreach ($categories as $category )
                    <li><a href="{{ route('frontend.category.posts' , $category->slug) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Main News End-->
      
@endsection

