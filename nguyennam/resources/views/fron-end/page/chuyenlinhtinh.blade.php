@extends('fron-end.master')
@section('title')
    Chuyện linh tinh
@endsection
@section('main')
<div class="blog-title container pt-4">
    <h4 class="font-weight-bold">Chuyện linh tinh</h4>
</div>
<div class="container bg-white mt-5">
    <div class="blog-item">
        @foreach($data as $value)
        <div class="row mb-4">
            <img class="col-sm-4 p-0 w-100" src="public/upload/blog/{{$value->thumbnail}}" alt="">
            <div class="col-sm-8">
                <a href="blog/{{$value->blog_id}}/{{$value->blog_name}}"><h4 class="font-weight-bold pt-2">{{$value->blog_name}}</h4></a>
                <p><i class="far fa-clock"></i> {{$value->updated_at}}</p>
                <p>{{$value->mota}}</p>
            </div>
        </div>
        <hr>
        @endforeach
        <div aria-label="Page navigation" class="d-block mx-auto">
            {{$data->links()}}
        </div>
    </div>
</div>
@endsection