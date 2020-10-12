<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';
    protected $fillable = [
        'blog_name','cate_blog','thumbnail','mota','content',
    ];
    public function cate(){
        return $this->belongTo('App\Category');
    }
}
