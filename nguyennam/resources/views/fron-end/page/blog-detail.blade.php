@extends('fron-end.master')
@section('title')
    {{$data->blog_name}}
@endsection
@section('main')
        <div class="container bg-white mt-5">
            <div class="category-blog">
                <h5 class="pt-3">{{$data->cate_name}}</h5>
            </div>
            <div class="row">
                <div class="content col-sm-8">
                    <div class="title-blog">
                        <h2>{{$data->blog_name}}</h2>
                        <p><i class="far fa-clock"></i> {{$data->updated_at}}</p>
                    </div>
                    <div class="content-blog">
                        <h5 class="font-weight-bold mt-3">{{$data->mota}}</h5>
                        <p>{!!$data->content!!}</p>
                    </div>
                    <div>
                        <h2 class="pt-4 font-weight-bold">Bình luận</h2>
                        <form action="{{route('home.comment')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->blog_id}}">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @if($errors->has('name'))
                                 <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @if($errors->has('email'))
                                 <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung:</label>
                                <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                                @if($errors->has('content'))
                                 <p class="text-danger">{{$errors->first('content')}}</p>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Bình luận</button>
                        </form>
                    </div>
                    <div class="pt-5">
                    @foreach($data2 as $value)
                        <h5 class="font-weight-bold m-0">{{$value->com_name}}</h5>
                        <small>{{$value->created_at}}</small>
                        <p style="font-size:25px">{{$value->com_content}}</p>
                        <hr>
                    @endforeach
                    <div aria-label="Page navigation" class="d-block mx-auto">
                    {{$data2->links()}}
                    </div>
                    </div>
                    <div class="blog-other">
                        <h5 class="title-blog-other">BÀI VIẾT CÙNG CHUYÊN MỤC</h5>
                        <div class="row skill-item-blog pt-4">
                        @foreach($data1 as $value)
                            <div class="col-sm-4">
                                <a href="blog/{{$value->blog_id}}/{{$value->blog_name}}">
                                    <div class="img-wrapper2"><img src="public/upload/blog/{{$value->thumbnail}}" alt=""></div>
                                    <h5>{{$value->blog_name}}</h5>
                                </a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="category-other col-sm-4">
                    <div class="category-other-blog">
                        <h5 class="pt-3">Chuyện đời</h5>
                        <div class="pt-3">
                        @foreach($chuyendoi as $value)
                            <div class="row mb-3">
                                <img class="col-sm-4 w-100" src="public/upload/blog/{{$value->thumbnail}}" alt="">
                                <div class="col-sm-8">
                                    <p><a href="blog/{{$value->blog_id}}/{{$value->blog_name}}">{{$value->blog_name}}</a></p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection