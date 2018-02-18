<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldProjectsController extends Controller
{
    public function OldProjectsHandler($projects) {
        // Temp solution for /MyStuff handler. Will change later ;) )
        return redirect()->away("https://www.jamiephan.net/MyStuff/" . $projects);
    }
}
