<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexHandler(){

        return view("Index.index");

    }

    
    public function aboutHandler(){

        return view("Index.about");

    }

    public function projectsHandler(){

        return view("Index.projects");

    }

    public function contactHandler(){

        return view("Index.contact");

    }
}
