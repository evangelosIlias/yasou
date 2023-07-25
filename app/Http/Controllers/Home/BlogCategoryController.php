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

    // Add the blog category and return the view 
    public function addBlogCategory() {
        return view('admin.blog_category.add_blog_category');

    }

    // Create the blog category into database
    public function storeBlogCategory(Request $request){

        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' => 'The blog category name is required',
        ]);

        BlogCategory::create([
            'blog_category' => $request->blog_category,
        ]);
        

        $not_succ = [
            'message' => 'Home Blog Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        
        return redirect()->route('home.blog.category')->with($not_succ);
    }

    // Edit the blog category
    public function editBlogCategory($id) {
        $editBlogCategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.edit_blog_category', compact('editBlogCategory'));
    }

    // Update the blog category and database
    public function updateBlogCategory(Request $request) {

        $updateBlogCategory = $request->id;

        BlogCategory::findOrFail($updateBlogCategory)->update([
            'blog_category' => $request->blog_category,
        ]);

        $not_succ = [
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success',
        ];
        
        return redirect()->route('home.blog.category')->with($not_succ);

    }

    // Delete the blog category
    public function deleteBlogCategory($id) {

        BlogCategory::findOrFail($id)->delete();

        $not_succ = [
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('home.blog.category')->with($not_succ);
    }

}
