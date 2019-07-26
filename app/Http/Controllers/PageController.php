<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;


class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function news()
    {
        return view('pages.news');
    }
    
    public function newsDetails($id)
    {
        $post = Post::find($id);
        return view('pages.news-details')->with('post', $post);
    }

    public function blogParcours2Colonnes()
    {
        return view('pages.blog-parcours-2-colonnes');
    }

    public function blogParcoursTimeline()
    {
        return view('pages.blog-parcours-timeline');
    }

    public function showBlogList() {
        $posts = Post::orderBy('id', 'DESC')->paginate(2);
        return view('pages.blog-parcours-2-colonnes')->with('posts', $posts);
    }
}
