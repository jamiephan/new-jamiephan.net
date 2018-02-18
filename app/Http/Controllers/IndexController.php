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
                array(
                    "id" => "GameletAPI",
                    "title" => "Gamelet API",
                    "description" => "Using Gamelet API to enhance and develop your love to gamelet!",
                    "links" => array(
                        array(
                            "text" => "API Endpoint",
                            "url" => "https://gameletapi.jamiephan.net/",
                        ),
                        array(
                            "text" => "Documentation",
                            "url" => "http://tw.gamelet.com/discussion.do?type=TALK&id=597624",
                        ),
                        array(
                            "text" => "Playground",
                            "url" => "https://gameletapi.jamiephan.net/test.html",
                        ),
                    ),
                ),
                array(
                    "id" => "GameletAPIFriendList",
                    "title" => "Gamelet API - FriendList",
                    "description" => "Sub-project for GameletAPI, return a list of friendlist on Gamelet.",
                    "links" => array(
                        array(
                            "text" => "API Endpoint",
                            "url" => "https://friendlist.jamiephan.net/",
                        ),
                        array(
                            "text" => "Documentation",
                            "url" => "https://github.com/jamiephan/GameletAPI.friendlist",
                        ),
                        array(
                            "text" => "Source Code",
                            "url" => "https://github.com/jamiephan/GameletAPI.friendlist",
                        ),
                    ),
                ),
               array(
                    "id" => "GameletUpdater",
                    "title" => "Gamelet Description Updater",
                    "description" => "Update Your profile with Gamelet Updater without pain!",
                    "links" => array(
                        array(
                            "text" => "Compiler",
                            "url" => "https://www.jamiephan.net/MyStuff/GameletUpdater2/compiler.php",
                        ),
                        array(
                            "text" => "Playground",
                            "url" => "https://www.jamiephan.net/MyStuff/GameletUpdater2/example.php",
                        ),
                        array(
                            "text" => "Test Profile",
                            "url" => "http://tw.gamelet.com/user.do?username=lovemelody01",
                        ),
                    ),
                ),
                array(
                    "id" => "GameletMsgGenerator",
                    "title" => "Gamelet Message Updater",
                    "description" => "Generate message with the same style with Gamelet. Getting its user nickname and icon from GameletAPI",
                    "links" => array(
                        array(
                            "text" => "Playground",
                            "url" => "https://www.jamiephan.net/MyStuff/GameletMsgGenerator/",
                        ),
                    ),
                ),
                array(
                    "id" => "GuessNumber",
                    "title" => "Guess Number Game!",
                    "description" => "Try to guess the number base on As and Bs as clues! New leaderboard is under developing :)",
                    "links" => array(
                        array(
                            "text" => "Prototype",
                            "url" => "https://www.jamiephan.net/MyStuff/GuessNumber/",
                        ),
                        array(
                            "text" => "BETA 1",
                            "url" => "https://www.jamiephan.net/MyStuff/GuessNumberBeta/?lang=en",
                        ),
                        array(
                            "text" => "BETA 2",
                            "url" => "https://www.jamiephan.net/MyStuff/GuessNumberBeta2/?lang=en",
                        ),
                    ),
                ),
                array(
                    "id" => "StupidTest",
                    "title" => "Testing on jQuery",
                    "description" => "Stupid Test on jQuery dynamic change colour and font size!",
                    "links" => array(
                        array(
                            "text" => "Playground",
                            "url" => "https://www.jamiephan.net/MyStuff/StupidTest/",
                        ),
                    ),
                ),
                array(
                    "id" => "VK",
                    "title" => "Virtual Keyboard",
                    "description" => "Base on Location Header, some PHP script and database to create an onscreen keyboard. Ver 2 is nearly fully developed with admin panel and custom controls.",
                    "links" => array(
                        array(
                            "text" => "Ver 1 Location",
                            "url" => "http://tw.gamelet.com/discussion.do?type=TALK&id=659496",
                        ),
                        array(
                            "text" => "Ver 2",
                            "url" => "https://www.jamiephan.net/MyStuff/VirtualKeyboard2/",
                        )
                    ),
                ),
                array(
                    "id" => "gbook",
                    "title" => "Guest Book",
                    "description" => "My first ever PHP project did it on 2008, a simple message board system. Ver.2 Have enhanced UI (a lot) edit and delete function(not public) and mobile friendly",
                    "links" => array(
                        array(
                            "text" => "Ver 1",
                            "url" => "https://www.jamiephan.net/MyStuff/gbook/",
                        ),
                        array(
                            "text" => "Ver 2",
                            "url" => "https://www.jamiephan.net/MyStuff/gbook2/",
                        )
                    ),
                ),
                array(
                    "id" => "HeroesStats",
                    "title" => "Heroes of the Storm Scaling compare",
                    "description" => "Compare the scaling on different hero and how many level to each them. Include both Physical and Magical armor for the EHP (Effective health Points)",
                    "links" => array(
                        array(
                            "text" => "Playground",
                            "url" => "https://heroes.jamiephan.net/",
                        ),
                        array(
                            "text" => "Chromie one shot calc",
                            "url" => "https://heroes.jamiephan.net/chromie.html",
                        )
                    ),
                ),
                array(
                    "id" => "ImgurUploader",
                    "title" => "Upload Image to Imgur",
                    "description" => "Because how annoying imgur's page design and un-user friendly, I decide to make one my own",
                    "links" => array(
                        array(
                            "text" => "Playground",
                            "url" => "https://www.jamiephan.net/MyStuff/imgur/",
                        ),
                    ),
                ),
                array(
                    "id" => "phpimg",
                    "title" => "PHP Image",
                    "description" => "My own first php visit counter for Gamelet.",
                    "links" => array(
                        array(
                            "text" => "image",
                            "url" => "http://www.jamiephan.net/MyStuff/phpimage/",
                        ),
                        array(
                            "text" => "Source code (very silly)",
                            "url" => "https://www.jamiephan.net/MyStuff/phpimage/?request_lovemelody_source_code",
                        )
                    ),
                ),
                array(
                    "id" => "maze",
                    "title" => "aMAZEing",
                    "description" => "Randomly Generated ╲ and ╱ makes it looks so cool",
                    "links" => array(
                        array(
                            "text" => "Playground",
                            "url" => "https://maze.jamiephan.net/",
                        ),
                    ),
                ),
                array(
                    "id" => "lab",
                    "title" => "Lab for new techs (kinda)",
                    "description" => "Random HTML files when I want to test new stuff (themeColor is the title color when browing Chrome on Android/IOS, CSS position sticky is a new CSS property added in chrome a while a go.)",
                    "links" => array(
                        array(
                            "text" => "Playground",
                            "url" => "https://www.jamiephan.net/MyStuff/lab/",
                        ),
                    ),
                ),
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
