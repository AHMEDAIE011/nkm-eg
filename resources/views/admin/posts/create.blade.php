@extends('layouts.dashboard.app')
@section('title')
    Create Post
@endsection

@section('body')
    <center>
        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-body shadow mb-4 col-10">
                <a style="margin-left: 95ch" class="btn btn-primary" href="{{ route('admin.posts.index') }}" >Show Posts</a>
                <h2>Create New Post</h2>
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach (session('errors')->all() as $error )
                                    <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <br><br>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" value="{{ @old('title') }}" name="title" placeholder="Enter Post Title EN" class="form-control">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ @old('title_ar') }}" name="title_ar" placeholder="Enter Post Title AR" class="form-control">
                            @error('title_ar')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                    <br>
                    <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="small_desc" value="{{ @old('small_desc') }}" placeholder="Enter Post Small Description EN" class="form-control"></textarea>
                            @error('small_desc')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="small_desc_ar" value="{{ @old('small_desc_ar') }}" placeholder="Enter Post Small Description AR" class="form-control"></textarea>
                            @error('small_desc_ar')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <br>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <p>Enter Description EN</p>
                            <textarea id="postContent" name="desc" value="{{ @old('desc') }}" placeholder="Enter Description EN" class="form-control"></textarea>
                            @error('desc')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <p>Enter Description AR</p>

                            <textarea id="postContentAr" name="desc_ar" value="{{ @old('desc_ar') }}" placeholder="Enter Description AR" class="form-control"></textarea>
                            @error('desc_ar')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="file" multiple id="postImage" name="images[]" class="form-control">
                            @error('images')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <select name="status" class="form-control">
                                <option selected >Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                            @error('status')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <select name="category_id" class="form-control">
                                <option selected >Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                            @error('category_id')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <select name="comment_able" class="form-control">
                                <option selected>Select Comment Able Status </option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                            @error('comment_able')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <select name="header_pro" class="form-control">
                                <option selected>Select Top Home Show Status </option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                            @error('header_pro')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>

               <br>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </div>

        </form>
    </center>
@endsection

@push('js')
   <script>
       $(function() {
            $('#postImage').fileinput({
                theme: 'fa5',
                allowedFileTypes: ['image'],
                maxFileCount: 5,
                enableResumableUpload: false,
                showUpload: false,

            });

            $('#postContent').summernote({
                height: 300,
            }); $('#postContentAr').summernote({
                height: 300,
            });
        });
   </script>

@endpush
