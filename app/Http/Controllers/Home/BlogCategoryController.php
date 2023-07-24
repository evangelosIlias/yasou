<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BlogCategoryController extends Controller
{   
    // Return the latest blog category from database
    public function homeBlogCategory(){
        $homeBlogCategory = BlogCategory::latest()->get();
        return view('admin.blog_category.home_blog_category', compact('homeBlogCategory'));
    }

    // Add the blog category view 
    public function addBlogCategory() {
        return view('admin.blog_category.add_blog_category');

    }

    // Insert the blog category into database
    public function storeBlogCategory(Request $request){

        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' => 'The blog category name is required',
        ]);

        BlogCategory::insert([
            'blog_category' => $request->blog_category,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $not_succ = [
            'message' => 'Home Blog Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        
        return redirect()->route('home.blog.category')->with($not_succ);
    }




}
