<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('author')->paginate(10);
        return view('frontend.pages.blog', compact('posts'));
    }
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('frontend.pages.blog-detail', compact('post'));
    }
}
