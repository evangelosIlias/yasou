<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{   
    // Creating the vie for the blog page
    public function homeBlog(){
        $homeBlog = Blog::latest()->get();
        return view('admin.blog.home_blog_all', compact('homeBlog'));
    }

    // Add blog and return the categories
    public function addBlog(){
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        return view('admin.blog.add_blog', compact('categories'));
    }

    // Storing the blog into database
    public function storeBlog(Request $request) {

        $request->validate([
            'blog_title' => 'required',
            'blog_tags' => 'required',      
        ], 
        [   
            'blog_title.required' => 'Blog title must be provided',
            'blog_tags.required' => 'Blog tags must be provided',
        ]);

        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(430, 327)->save('upload/blog/' . $name_gen);

            $save_url = 'upload/blog/' . $name_gen;

            Blog::create([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_image' => $save_url,
                'blog_description' => $request->blog_description,
            ]);

            $not_succ = [
                'message' => 'Home Blog and Image banner Inserted Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->route('home.blog')->with($not_succ);

        } else { 

            Blog::create([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);

            $not_info = [
                'message' => 'Home blog without Image Banner Inserted Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->route('home.blog')->with($not_info);
        }
    }

    // Edit Blog
    public function editBlog($id){
        $editBlog = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        return view('admin.blog.edit_blog', compact('editBlog', 'categories'));
    }

    // Update blog
    public function updateBlog(Request $request, $id) {

        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(430, 327)->save('upload/blog/' . $name_gen);

            $save_url = 'upload/blog/' . $name_gen;

            Blog::findOrFail($id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_image' => $save_url,
                'blog_description' => $request->blog_description,
            ]);

            $not_succ = [
                'message' => 'Home Blog and Image Updated Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->route('home.blog')->with($not_succ);

        } else { 

            Blog::findOrFail($id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);

            $not_info = [
                'message' => 'Home Blog without Image Updated Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->route('home.blog')->with($not_info);
        }
    }

    // Delete blog 
    public function deleteBlog($id) {

        $deleteblog = Blog::findOrFail($id);
        $img = $deleteblog->blog_image;
        unlink($img);

        Blog::findOrFail($id)->delete();

        $not_succ = [
            'message' => 'Blog and Image Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($not_succ);
    }

    // Blog details for the frontend
    public function blogDetails($id) {
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        $allBlog = Blog::latest()->limit(5)->get();
        $blogDetails = Blog::findOrFail($id);
        return view('frontend.blog_details', compact('blogDetails', 'allBlog', 'categories'));
    }

    // Creating the new category blog page
    public function categoryBlog($id) {
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        $allBlog = Blog::latest()->limit(5)->get();
        $categoryBlog = Blog::where('blog_category_id', $id)->orderBy('id', 'desc')->get();
        $categoryName = BlogCategory::findOrFail($id);
        return view('frontend.cat_blog_details', compact('categoryBlog', 'allBlog', 'categories', 'categoryName'));
    }

    // Blog page 
    public function blogPage() {
        $blogPage = Blog::latest()->paginate(3);
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        return view('frontend.blog_page', compact('blogPage', 'categories'));
    }



}
