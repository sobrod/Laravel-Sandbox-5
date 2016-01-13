<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //NOTE:  The create() method will create the object and save it to the DB as well.
    
    //Fillable mass assignment fields for the article
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
    
    
}
