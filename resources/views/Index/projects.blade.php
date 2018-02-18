@extends("layouts.app")

@section("content")

    @if(count($projects) > 0)
        @foreach($projects as $project)
            <li>{{$project}}</li>
        @endforeach
    @else

        No Projects :(

    @endif

@endsection