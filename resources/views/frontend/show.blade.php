@extends('layouts.fronend.app')
@section('title')
    Show {{ $mainPost->title }}
@endsection
@push('header')
    <link rel="canonical" href="{{ url()->full() }}" />
@endpush
@section('meta_desc')
    {{ $mainPost->small_desc }}
@endsection
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item "><a href="{{ route('frontend.index') }}">Home</a></li>
    <li class="breadcrumb-item active">{{ $mainPost->title }}</li>
@endsection



@section('body')
                <style>





                    .carousel-img {
                        object-fit: fill;
                        /* يخلي الصورة كاملة من غير قص */
                        max-height: 70vh;
                        /* أقصى ارتفاع: 80% من ارتفاع الشاشة */
                    }
                </style>



    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <div class="row">
    <!-- مساحة فاضية (col-2) -->
    <div class="col-lg-1 d-none d-lg-block"></div>


                <div class="col-lg-6">
                    <!-- Carousel -->
                    <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#newsCarousel" data-slide-to="1"></li>
                            <li data-target="#newsCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($mainPost->images as $index => $image)
                                <div class="carousel-item @if ($index == 0) active @endif">
                                    <img src="{{ asset($image->path) }}" class="d-block w-100 img-fluid carousel-img"
                                        alt="Slide {{ $index + 1 }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $mainPost->title }}</h5>
                                        <p></p>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Add more carousel-item blocks for additional slides -->
                        </div>
                        <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="alert alert-info">
                        Sub Descrption : {{ $mainPost->small_desc }}
                    </div>
                    <div class="sn-content">
                        {!! $mainPost->desc !!}
                    </div>

                    @auth
                        <!-- Comment Section -->
                        @if (auth('web')->user()->status != 0)
                            <div class="comment-section">
                                <!-- Comment Input -->
                                @if ($mainPost->comment_able == true)
                                    <form id="commentForm">
                                        <div class="comment-input">
                                            @csrf
                                            <input id="commentInput" name="comment" type="text"
                                                placeholder="Add a comment..." />
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="post_id" value="{{ $mainPost->id }}">
                                            <button type="submit">Comment</button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-info">
                                        Unable To Comment
                                    </div>
                                @endif
                                <div style="display: none" id="errorMsg" class="alert alert-danger">
                                    {{-- display error --}}
                                </div>
                                <!-- Display Comments -->
                                <div class="comments">
                                    @foreach ($mainPost->comments as $comment)
                                        <div class="comment">
                                            <img src="{{ asset($comment->user->image) }}" alt="User Image"
                                                class="comment-img" />
                                            <div class="comment-content">
                                                <span class="username">{{ $comment->user->name }}</span>
                                                <p class="comment-text">{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    @endforeach


                                    <!-- Add more comments here for demonstration -->
                                </div>

                                <!-- Show More Button -->
                                @if ($mainPost->comments->count() > 2)
                                    <button id="showMoreBtn" class="show-more-btn">Show more</button>
                                @endif
                            </div>
                        @endif
                    @endauth

                    <!-- Related News -->

                    <div class="sn-related">
                        <h2>Related Products</h2>
                        <div class="row sn-slider">
                            @foreach ($posts_belongs_to_category as $post)
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img style="height: 340px;width:445px"
                                            src="{{ asset(asset($post->images->first()->path)) }}" class="img-fluid"
                                            alt="{{ $post->title }}" />
                                        <div class="sn-title">
                                            <a
                                                href="{{ route('frontend.post.show', $post->slug) }}">{{ $post->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                
    <!-- مساحة فاضية (col-2) -->
    <div class="col-lg-1 d-none d-lg-block"></div>


                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="sw-title">In This Category</h2>
                            <div class="news-list">
                                @foreach ($posts_belongs_to_category as $post)
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="{{ asset(asset($post->images->first()->path)) }}" />
                                        </div>
                                        <div class="nl-title">
                                            <a
                                                href="{{ route('frontend.post.show', $post->slug) }}">{{ $post->title }}</a>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="tab-news">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#featured">Latest</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        @foreach ($latest_posts as $post)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{ asset(asset($post->images->first()->path)) }}" />
                                                </div>
                                                <div class="tn-title">
                                                    <a
                                                        href="{{ route('frontend.post.show', $post->slug) }}">{{ $post->title }}</a>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                    {{-- popular --}}
                                    <div id="popular" class="container tab-pane fade">
                                        @foreach ($gretest_posts_comments as $post)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{ asset($post->images->first()->path) }}" />
                                                </div>
                                                <div class="tn-title">
                                                    <a
                                                        href="{{ route('frontend.post.show', $post->slug) }}">{{ $post->title }}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="sw-title">News Category</h2>
                            <div class="category">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="">{{ $category->name }}</a><span>({{ $category->posts->count() }})</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="sidebar-widget">
                  <div class="image">
                    <a href="https://htmlcodex.com"
                      ><img src="img/ads-2.jpg" alt="Image"
                    /></a>
                  </div>
                </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single News End-->

    <!-- Contact Start -->
    <div class="contact">
        <div class="container-fluid">
            <h1>Contact Us</h1><br>
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="{{ route('frontend.conact.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name" />
                                    <strong class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </strong>
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="email" type="email" class="form-control"
                                        placeholder="Your Email" />
                                    <strong class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </strong>
                                </div>


                                <div class="form-group col-md-4">
                                    <input name="phone" type="text" class="form-control"
                                        placeholder="Your phone" />
                                </div>
                                <strong class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </div>
                            <div class="form-group">
                                <input name="title" type="hidden" class="form-control"
                                    value="{!! $mainPost->title !!}" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea name="body" class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div>
                                <button class="btn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h3>Get in Touch</h3>
                        <p class="mb-4">
                            {{ $getSetting->small_desc }}

                        </p>
                        <h4><i class="fa fa-map-marker"></i>{{ $getSetting->street }},{{ $getSetting->city }} ,
                            {{ $getSetting->country }}</h4>
                        <h4><i class="fa fa-envelope"></i>{{ $getSetting->email }}</h4>
                        <h4><i class="fa fa-phone"></i>+{{ $getSetting->phone }}</h4>
                        <div class="social">
                            <a href="{{ $getSetting->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $getSetting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $getSetting->instagram }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $getSetting->youtupe }}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@push('js')
    <script>
        var baseUrl = "{{ asset('') }}";
        // show more comments
        $(document).on('click', '#showMoreBtn', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('frontend.post.getAllComments', $mainPost->slug) }}",
                type: 'GET',
                success: function(data) {
                    $('.comments').empty();
                    $.each(data, function(key, comment) {
                        $('.comments').append(`<div class="comment">
                        <img src="${comment.user.image}" alt="User Image" class="comment-img" />
                        <div class="comment-content">
                          <span class="username">${comment.user.name}</span>
                          <p class="comment-text">${comment.comment}</p>
                        </div>
                      </div>`);
                        $('#showMoreBtn').hide();

                    });

                },
                error: function(data) {

                },
            });

        });

        // save comments
        $(document).on('submit', '#commentForm', function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);

            $('#commentInput').val('');

            $.ajax({
                url: "{{ route('frontend.post.comments.store') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                success: function(data) {
                    $('#errorMsg').hide();
                    $('.comments').prepend(`<div class="comment">
                                    <img src="${baseUrl}${data.comment.user.image}" alt="User Image" class="comment-img" />
                                    <div class="comment-content">
                                        <span class="username">${data.comment.user.name}</span>
                                        <p class="comment-text">${data.comment.comment}</p>
                                    </div>
                                </div>`);
                },

                error: function(data) {
                    var response = $.parseJSON(data.responseText);
                    $('#errorMsg').text(response.errors.comment).show();
                },

            });
        });
    </script>
@endpush
