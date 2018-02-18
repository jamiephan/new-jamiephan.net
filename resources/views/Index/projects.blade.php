@extends("layouts.app")

@section("content")



    @if(count($projects) > 0)
    <div id="accordion">
    {{--  loop  --}}
        @foreach($projects as $project)
            <div class="card">
              <div class="card-header" id="heading{{$project["id"]}}">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$project["id"]}}" aria-expanded="false" aria-controls="collapse{{$project["id"]}}">
                        {{$project["title"]}}
                  </button>
                </h5>
              </div>
          
              <div id="collapse{{$project["id"]}}" class="collapse" aria-labelledby="heading{{$project["id"]}}" data-parent="#accordion">
                <div class="card-body">
                    <p>{{$project["description"]}}</p>
                    <p>
                            {{--  loop links  --}}
                            @foreach($project["links"] as $link)
                                <button type="button" class="btn btn-primary">
                                    <a href="{{$link["url"]}}">
                                            {{$link["text"]}}
                                    </a>
                                </button>
                            @endforeach
                            {{--  loop links  --}}
                    </p>
                </div>
              </div>
            </div>
        @endforeach
{{--  loop  --}}
    </div>
        
     @else 
        No Projects :( 
    @endif 
@endsection