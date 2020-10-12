@extends('fron-end.master')
@section('title')
Trang chủ - Nam Victor
@endsection
@section('main')
<div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="public/source/image/slider/nam 2.png" alt="Nguyễn Nam 1" width="1100" height="300">
                </div>
                <div class="carousel-item">
                <img src="public/source/image/slider/nam vs diep van.png" alt="Nguyễn Nam 2" width="1100" height="300">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
<section class="intro pt-4 container-fluid">
                <div class="row">
                    <div class="info col-sm-4 col-xs-4">
                        <img src="public/source/image/info/2.jpg" alt="" class="mx-auto d-block">
                        <div class="info-left">
                            <h4 class="text-white text-center pt-2">Nguyễn Nam</h4>
                            <p>Họ và Tên: Nguyễn Văn Nam</p>
                            <p>Ngày Sinh: 13/10/1997</p>
                            <p>Quê Quán: Tam Đảo - Vĩnh Phúc</p>
                            <p>Học Cơ Điện Tử tại HVKT Quân Sự</p>
                            <p>Câu nói yêu thích:
                                <i>"Có làm thì mới có ăn,không làm thì chỉ ăn cứt"</i>
                            </p>
                            <p>Quan điểm trong tình yêu: <i>"Nếu không yêu thì xin đừng thịt nhau"</i></p>
                            <p>Cuốn sách yêu thích: <i>"Cô giáo Thảo"</i></p>
                        </div>
                    </div>
                    <div class="skill col-sm-7 col-xs-7">
                        <h2><i class="fas fa-heart"></i> Tình yêu</h2>
                        <div class="bg bg-white progaming">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:96%; height: 30px;">Mức độ hạnh phúc ở thời điểm hiện tại - 96,69%</div>
                        </div>
                        <div class="row skill-item-blog pt-4">
                        @foreach($tinhyeu as $value)
                            <div class="col-sm-4">
                                <a href="blog/{{$value->blog_id}}/{{$value->blog_name}}">
                                    <div class="img-wrapper"><img src="public/upload/blog/{{$value->thumbnail}}" alt=""></div>
                                    <h5>{{$value->blog_name}}</h5>
                                </a>
                            </div>
                        @endforeach
                        </div>
                        <h2 class="pt-5"><i class="fas fa-shoe-prints"></i></i> Chuyện đời</h2>
                        <div class="bg bg-white progaming">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:69%; height: 30px;">Mức độ hài lòng với cuộc sống hiện tại - 69,96%</div>
                        </div>
                        @foreach($chuyendoi as $value)
                        <div class="row skill-item-blog pt-4">
                            <div class="col-sm-4">
                                <a href="blog/{{$value->blog_id}}/{{$value->blog_name}}">
                                    <div class="img-wrapper2"><img src="public/upload/blog/{{$value->thumbnail}}" alt=""></div>
                                    <h5>{{$value->blog_name}}</h5>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
        <section class="life bg bg-white">
            <h3 class="text-center pt-5 font-weight-bold title">TIN CÔNG NGHỆ</h3>
            <div class="line-title">
            </div>
            <div class="container tin-cong-nghe pt-5">
            @foreach($tincongnghe as $value)
                <div class="row">
                    <img class="col-sm-4 w-100" src="public/upload/blog/{{$value->thumbnail}}" alt="">
                    <div class="col-sm-8">
                        <h3><a href="blog/{{$value->blog_id}}/{{$value->blog_name}}">{{$value->blog_name}}</a></h3>
                        <small>{{$value->updated_at}}</small>
                        <p>{{$value->mota}}</p>
                    </div>
                </div>
                <hr>
            @endforeach
            <div aria-label="Page navigation" class="d-block mx-auto">
                {{$tincongnghe->links()}}
            </div>
            </div>
        </section>
        <section class="do-hop-namvictor p-5">
            <h3 class="text-center pt-5 font-weight-bold title text-white">CÙNG XEM BẠN VÀ NAMVICTOR HỢP NHAU KHÔNG NHÉ !</h3>
            <div class="line-title">
            </div>
            <div class="container text-center">
                <form>
                    <div class="form-group row check-do-hop">
                        <label for="name" class="col-sm-3 col-form-label">Tên của bạn</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên của bạn" require>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="age" class="col-sm-3 col-form-label">Tuổi của bạn</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="age" name="age" placeholder="Nhập tuổi của bạn" require>
                        </div>
                      </div>
                    <input type="button" name="submit" class="btn btn-primary mx-auto d-block" value="XEM NGAY" onclick="getForm()">
                    <h5 class="text-white mt-3" id="name_check"></h5>
                    <h4 id="check" class="text-white mt-3"></h4>
                  </form>
                  <script>
                    function getForm(){
                        var name = document.getElementById("name").value;
                        var age = document.getElementById("age").value;
                        var random = Math.floor(Math.random() * 100);
                        if (name==0 || age==0) {
                            document.getElementById("name_check").innerHTML = "Vui lòng nhập đủ thông tin !";
                        }else{
                            if (random<=30) {
                            document.getElementById("name_check").innerHTML = "Xin chào "+ name + " !";
                            document.getElementById("check").innerHTML = "Thật buồn ! Độ phù hợp của bạn và Nam Victor chỉ là "+ random + "%";
                            }else if(random>30 && random<=60) {
                                document.getElementById("name_check").innerHTML = "Xin chào "+ name + " !";
                                document.getElementById("check").innerHTML = "Độ phù hợp của bạn và Nam Victor là "+ random +"% <br> Một chỉ số ổn phải không nào";
                            }else if(random>60 && random<=80){
                                document.getElementById("name_check").innerHTML = "Xin chào "+ name + " !";
                                document.getElementById("check").innerHTML = "Wow ! Độ phù hợp của bạn và Nam Victor là "+ random + "% <br>Tuyệt vời !";
                            }else if(random>80) {
                                document.getElementById("name_check").innerHTML = "Xin chào "+ name + " !";
                                document.getElementById("check").innerHTML = "Thật tuyệt vời! Độ phù hợp của bạn và Nam Victor là "+ random + "% <br>Bạn và Nam khả năng sẽ là trỉ kỷ của nhau đấy !";
                            }
                        }
                    }
                  </script>
            </div>
        </section>
@endsection