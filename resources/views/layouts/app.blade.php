<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Jamie Phan - {{$title}}</title>
</head>
<body>
    @include("layouts.inc.navbar")
    <div class="container">
        <div class="row">
            @if(Request::url() !== url('/'))
                <h1 class="display-1">//{{$title}}</h1>
            @endif        
        </div>
         @yield("content")
    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>