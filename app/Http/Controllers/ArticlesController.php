<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

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
        //Get articles with a publish date that is <= now
        $articles = Article::orderBy('published_at', 'desc')->published()->get();
        
        //Get all articles
        //$articles = Article::orderBy('published_at', 'desc')->get();
        
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
    
    /**
     * Display the article create form
     *
     * @return view
     */
    public function create()
    {
        return view('articles.create');
    }
    
    /**
     * Save a new article
     *
     * @return Redirect
     */
    public function store(ArticleRequest $request)
    {
        //Body will execute only if CreateArticleRequest rules pass
        
        //Use base class Controller.validate(Request $request, $rules[])
        //$this->validate($request, [
        //    'title'=>'required',
        //    'body'=>'required',
        //    'published_at'=>'required|date'
        //]);
        
        $input; //User input array
        
        $input = $request->all(); //Get an array of user input
        
        //NOTE: Fillable protects 
        Article::create($input); //Use eloquent to create and save the new article
        
        return redirect(url('articles'));
    }
    
    /**
     * Edit an existing articles
     *
     * @return view
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id); //Find or throw model not found exception
        $editView = view('articles.edit', compact('article'));
        //dd($article);
        return $editView;
    }
    
    /**
     * Update an existing article.
     *
     * @return redirect
     */
    public function update($id, ArticleRequest $request)
    {
        //Vars
        $article;   //The article to update.
        
        $article = Article::findOrFail($id); //Find or throw exception
        
        $article->update($request->all()); //Update
        
        return redirect('articles'); //Return to index
    }
}
