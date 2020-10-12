@extends('fron-end.master')
@section('title')
    Thư viện ảnh của Nam Victor
@endsection
@section('main')
<div class="blog-title container pt-4">
    <h4 class="font-weight-bold"><i>"Ai cũng sẽ có những kỷ niệm cho riêng mình. Với tôi những khoảnh khắc trong cuộc sống nó là những thứ vô giá, vì vậy tôi muốn lưu giữ tất cả những thứ đó tại đây. Để rồi mai sau khi nhìn lại sẽ thấy được những thứ mình làm trong suốt thời gian qua !"</i></h4>
</div>
<div class="container library">
    <ul class="text-center">
        @foreach($data as $value)
        <li>
            <img  src="public/upload/library/{{$value->library_name}}" alt="">
        </li>
        @endforeach
    </ul>
    <div aria-label="Page navigation">
    {{$data->links()}}
    </div>
</div>
@endsection