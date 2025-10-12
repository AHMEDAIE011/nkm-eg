@extends('layouts.fronend.app')
@section('title')
All Categories 
@endsection
@push('header')
<link rel="canonical" href="{{ url()->full() }}" />
@endpush

@section('breadcrumb')
<div class="imageCategory">
    <img src="{{asset('assets/frontend/img/hidder.webp')}}" class="img-fluid" alt="">
</div>
    @parent
    <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">{{__('home.home')}}</a></li>
    <li class="breadcrumb-item active">{{__('home.allCategory')}}</li>
@endsection

@section('body')
<br><br><br>


   <!-- Main News Start-->
   <div class="main-news">
    <div class="container-fluid">
        <h2 class="text-center mb-4">{{__('home.allCategory')}}</h2>
        <div class="row">
            <div class="col-lg-9">
        <!-- عرض الفئات -->
                <div class="category-container">
                    @foreach ($categories_with_posts as $category)
                        <div class="category mb-5">

                            @if (App::getLocale() == 'ar')
                                                <h3 class="category-title">{{ $category->name_ar }}</h3>

                            @else
                                                <h3 class="category-title">{{ $category->name }}</h3>
                                                @endif  
                            <div class="row">
                                @foreach ($category->posts as $index => $post)
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <div class="mn-img card product-card  @if ($index < 8) visible @endif">
                                            <a href="{{ route('frontend.post.show' , $post->slug) }}">
                                                
                                                <img  src="{{ asset($post->images->first()->path ?? '') }}" class="card-img-top" alt="{{ $post->title }}"></a>
                                            <div class="mn-title card-body text-center">
                                                @if (App::getLocale() == 'ar')
                                                <a class="card-title" href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title_ar }}</a>
                                                @else
                                                <a class="card-title" href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a>
                                                @endif  
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-more">{{__('home.showMore')}}</button>
                            </div>
                        </div>
                    @endforeach
                </div>  
            </div>
            <div class="col-lg-3">
                <div class="mn-list">
                <h2>{{__('home.allCategories')}}</h2>
                <ul>
                    @foreach ($categories as $category )
                    @if (App::getLocale() == 'ar')
                    <li><a href="{{ route('frontend.category.posts' , $category->slug) }}">{{ $category->name_ar }}</a></li>
                    @else
                    <li><a href="{{ route('frontend.category.posts' , $category->slug) }}">{{ $category->name }}</a></li>
                    @endif  
                    @endforeach
                </ul>
                </div>
            </div>
     </div>
    </div>
  </div>

  <!-- Main News End-->
<script>
    document.querySelectorAll('.btn-more').forEach(button => {
        button.addEventListener('click', function () {
            let category = this.closest('.category'); // تحديد الفئة المرتبطة بالزر
            let hiddenProducts = category.querySelectorAll('.product-card:not(.visible)');

            let count = 0;
            hiddenProducts.forEach(product => {
                if (count < 4) { // إظهار 4 منتجات فقط
                    product.classList.add('visible');
                    count++;
                }
            });

            // إخفاء الزر إذا لم يعد هناك منتجات مخفية
            if (category.querySelectorAll('.product-card:not(.visible)').length === 0) {
                this.style.display = 'none';
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

