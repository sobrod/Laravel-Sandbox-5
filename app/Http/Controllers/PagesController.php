<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $data = []; //View data as data array
        $data['first'] = 'Igore';
        $data['last'] = 'Rodriguez';
        $data['name'] = 'Igore Rodriguez';
        
        $name = 'Igore <span style="color: green;">Rodriguez</span> <scrip>alert("Hacked!!");</script>'; //View data as variable
        
        //Note: compact('x', 'y', 'z', .....) will try to find variables $x,$y,$z... and compact them into an associative array.
        $first = "Igore";
        $last = "Rodriguez";
        
        //Create a view and add data with the with function.
        //$aboutView = view("pages.about");   //Generate the view this get request returns.
        //$aboutView->with("name", $name);    //Add data to the view via with();
        //$aboutView->with(['first'=>'Igore', 'last'=>'Rodriguez', 'name'=>$name]);
        
        //Create a view with data[]
        //$aboutView = view('pages.about', $data);
        
        //Create a view with compact() data
        $aboutView = view('pages.about', compact('first', 'last', 'name'));
        
        return $aboutView;
    }
}
