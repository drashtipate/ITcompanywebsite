<?php

namespace App\Http\Controllers;

use WithPagination;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $paginationTheme = 'bootstrap';

    public function blog($categorySlug = null)
    {
        $categories = Category::all();

        if(!empty($categorySlug)) {
            $category = Category::where('slug', $categorySlug)->first();
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
                        ->where('status', 1)
                        ->get()
                        ->take(3);

        return view('blog', compact('articles', 'categories', 'latestArticles'));
    }

    // public function setCategory($slug = null, $name = null)
    // {
    //     $this->categorySlug = $slug;
    //     $this->categoryName = $name;

    //     // dd($this->categorySlug, $this->categoryName);
    // }

    public function blogdetails($id){
        $article = Article::select('articles.*','categories.name as category_name')->leftJoin('categories', 'categories.id', 'articles.category_id')
                            ->findOrFail($id);

        return view('blog-details', compact('article'));
    }
}
