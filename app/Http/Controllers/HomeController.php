<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $categories = Category::all();

        if(!empty($this->categorySlug)) {
            $category = Category::where('slug', $this->categorySlug)->first();
            // dd($category);

            if (empty($category)) {
                abort(404);
            }

            $articles = Article::orderBy('created_at','DESC')
                        ->where('category_id', $category->id)
                        ->where('status', 1)
                        ->paginate(4);

        } else {
            $articles = Article::orderBy('created_at','DESC')
                        ->where('status', 1)
                        ->paginate(4);
        }

        $latestArticles = Article::orderBy('created_at','DESC')
                        ->where('status', 1)
                        ->get()
                        ->take(3);

        return view('home', compact('articles', 'categories', 'latestArticles'));
    }
    
    
}
