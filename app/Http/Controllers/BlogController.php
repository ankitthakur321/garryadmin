<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function addBlog()
    {
        return view('admin.blogs.add-blog');
    }

    public function saveBlog(Request $request)
    {
        //Storing blogImage
        $fileName = $request->file('blogImage')->getClientOriginalName();
        $path = $request->file('blogImage')->storeAs('uploads/blog-images', $fileName, 'public');
        $blogImage = "/storage/$path";

        //Storing Blog Data in DB
        $blog = new Blog;
        $blog->blog_title = $request->input('blogTitle');
        $blog->blog_image = $blogImage;
        $blog->blog_short_description = $request->input('blogDesc');
        $blog->blog_content = $request->input('blogContent');
        $blog->blog_author = $request->input('blogAuthor');
        $blog->save();
        return redirect('admin/view-blogs')->with('status', "Blog Inserted Successfully");
    }

    public function viewBlogs()
    {
        $blogs = Blog::all();
        return view('admin.blogs.view-blogs', compact('blogs'));
    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit-blog', compact('blog'));
    }

    public function updateBlog(Request $request)
    {
        $blog = Blog::find($request->input('blogId'));
        $blog->update([
            'blog_title' => $request->input('blogTitle'),
            'blog_short_description' => $request->input('blogDesc'),
            'blog_content' => $request->input('blogContent'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $blogImage = null;
        if ($request->file('blogImage') != null) {
            //deleting previous image
            $blogImage = str_replace('/storage', '/public', $blog->blog_image);
            if (Storage::exists($blogImage)) {
                Storage::delete($blogImage);
            }
            //Storing blogImage
            $fileName = $request->file('blogImage')->getClientOriginalName();
            $path = $request->file('blogImage')->storeAs('uploads/blog-images', $fileName, 'public');
            $blogImage = "/storage/$path";
            
        }

        if ($blogImage != null) {
            $blog->update([
                'blog_image' => $blogImage,
            ]);
        }

        return redirect('admin/view-blogs')->with('status', 'Blog updated successfully.');;
    }

    public function destroyBlog(Request $request)
    {
        $blogId = $request->input('blogId');
        $blog = Blog::find($blogId);
        $blogImage = str_replace('/storage', '/public', $blog->blog_image);
        if (Storage::exists($blogImage)) {
            Storage::delete($blogImage);
        }
        Blog::where('id', $blogId)->delete();
        return back()->with('status', 'Blog deleted successfully.');
    }
}
