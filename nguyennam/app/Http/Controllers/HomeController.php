<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use App\Library;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\MessageBag;
use App\Http\Requests\commentRequest;

class HomeController extends Controller
{
    public function index(){
        $tinhyeu = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->where('cate_name','Tình Yêu')->orderBy('blog_id','DESC')->limit(3)->get();
        $chuyendoi = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->where('cate_name','Chuyen đời')->orderBy('blog_id','DESC')->limit(3)->get();
        $tincongnghe = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->orderBy('blog_id','DESC')->where('cate_name','Tin công nghệ')->Paginate(3);
        return view('fron-end.page.home',compact('tincongnghe','tinhyeu','chuyendoi'));
        
    }
    public function chuyennghenghiep(){
        $data = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->orderBy('blog_id','DESC')->where('cate_name','Chuyện nghề nghiệp')->Paginate(6);
        return view('fron-end.page.chuyennghenghiep',compact('data'));
    }
    public function chuyendoi(){
        $data = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->orderBy('blog_id','DESC')->where('cate_name','Chuyện đời')->Paginate(6);
        return view('fron-end.page.chuyendoi',compact('data'));
    }
    public function chuyenlinhtinh(){
        $data = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->orderBy('blog_id','DESC')->where('cate_name','Chuyện linh tinh')->Paginate(6);
        return view('fron-end.page.chuyenlinhtinh',compact('data'));
    }
    public function baiviettamsu(){
        $data = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->orderBy('blog_id','DESC')->where('cate_name','Bài viết tâm sự')->Paginate(6);
        return view('fron-end.page.baiviettamsu',compact('data'));
    }
    public function blogdetail($id,$blog_name){
        $data = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->where('blog_name',$blog_name)->orderBy('blog_id','DESC')->first();
        $data1 = Blog::orderBy('blog_id','DESC')->where('blog_name','!=',$blog_name)->limit(3)->get();
        $data2 = Comment::where('com_blog',$id)->orderBy('com_id','DESC')->Paginate(3);
        $chuyendoi = DB::table('blog')->join('category','blog.cate_blog','=','category.cate_id')->where('cate_name','Chuyen đời')->orderBy('blog_id','DESC')->limit(4)->get();
        return view('fron-end.page.blog-detail',compact('data','data1','chuyendoi','data2'));
    }
    public function library(){
        $data = Library::orderBy('library_id','DESC')->Paginate(20);
        return view('fron-end.page.library',compact('data'));
    }
    public function comment(commentRequest $request){
        $com = new Comment;
            $com->com_name = $request->name;
            $com->com_email = $request->email;
            $com->com_content = $request->content;
            $com->com_blog = $request->id;
            $com->save();
            return back();
    }
}
