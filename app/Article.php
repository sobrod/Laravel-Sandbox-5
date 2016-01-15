<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //NOTE:  The Model.create() method will create the object and save it to the DB as well.
    
    //Properties
    //****************************************************************************************
    
    //Fillable mass assignment fields for the article
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
    
    protected $dates = ['published_at']; //Convert all dates in $dates to Carbon.
    
    //Mutators
    //****************************************************************************************
    
    /**
     * Format the published_at attribute
     *
     * @return Eloquent collection
     */
    public function setPublishedAtAttribute($date)
    {
        //dd($date);
        //Format and add time to $date.
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        
        //You can also parse the date and then inspect the individual parts like year and time.
        //Carbon::parse($date);
    }
    
    //Scopes
    //****************************************************************************************
    
    /**
     * Published at query scope. Filters out articles that are published at a future date.
     *
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
}
