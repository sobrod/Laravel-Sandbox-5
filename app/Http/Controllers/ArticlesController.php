<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Get the articles home view
     *
     * @return view
     */
    public function index()
    {
        //Note: all() returns an eloquenet collection.
        $articles = Article::all();
        
        //If you return the collection it will be cast to json.
        //return $articles;
        
        return view('articles.index', compact('articles'));
    }
    
    /**
     * Show an article
     *
     * @param $id The id of the selected article
     * @return view
     */
    public function show($id)
    {
        //Note find() Find a model by its primary key - returns Model|Collection
        $article = Article::findOrFail($id); //Throws model not found exception
        
        //Manual 404 exception if findOrFail() is not used
        //Assert that an articel was not found
        //if(is_null($article))
        //{
        //    abort(404); //404 not found exception if null
        //}
        
        return view('articles.show', compact('article'));
    }
}
