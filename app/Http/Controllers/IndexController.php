<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexHandler(){

        $data = array(
            "title" => "Home",
        );

        return view("Index.index")->with($data);

    }

    
    public function aboutHandler(){

        $data = array(
            "title" => "About Me",
        );

        return view("Index.about")->with($data);

    }

    public function projectsHandler(){

        $data = array(
            "title" => "Projects",
            "projects" => array(
                "GameletAPI", "GameletAPI2", "GameletMessageGenerator", "StupidTest"
            )
        );

        return view("Index.projects")->with($data);

    }

    public function contactHandler(){

        $data = array(
            "title" => "Contact Me",
        );

        return view("Index.contact")->with($data);

    }
}
