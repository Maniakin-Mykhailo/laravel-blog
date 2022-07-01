<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $categories = Category::orderBy('title')->get();
        $posts = Post::all();
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function getPostsByCategory($slug)
    {
        $categories = Category::orderBy('title')->get();
        $current_category = Category::where('slug', $slug)->first();
        return view('pages.index', [
            'posts' => $current_category->posts,
            'categories' => $categories,
        ]);
    }
}
