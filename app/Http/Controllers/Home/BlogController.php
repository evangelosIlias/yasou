<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    public function homeBlog(){
        $homeBlog = Blog::latest()->get();
        return view('admin.blog.home_blog_all', compact('homeBlog'));
    }

    public function addBlog(){
        return view('admin.blog.add_blog');
    }
}
