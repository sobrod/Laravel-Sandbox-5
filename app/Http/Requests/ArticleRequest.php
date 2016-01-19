<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

//Note: Can be created via "php artisan make:request <name>".

class ArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false; //No one is authorized to make this request.
        
        return true; //Anyone can make this request.
    }

    /**
     * Get the validation rules that apply to the article creation request.
     *
     * @return array
     */
    public function rules()
    {
        /*
        /* Request input:
        /* -title
        /* -body
        /* -published_at
        */
        
        return [
            'title'=>'required|min:3',
            'body'=>'required|min:9|max:256',
            'published_at'=>'required|date'
        ];
    }
}
