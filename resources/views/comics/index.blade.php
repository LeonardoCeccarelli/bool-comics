@extends("layouts.default")

@section("title", "Boolean's Comics")

@section("header_content")
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">
                The Best Comics in circulation, you can find them Here !!</h1>
           
        </div>
    </div>
</header>
@endsection

@section("main_content")
<div class="container">
    <div class="row row-cols4 g-3">
        @foreach($comics as $comic)
        {{-- @dump($comic) --}}
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="comic_Cover">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{mb_strimwidth($comic->description, 0, 100,"...")}}</p>
              <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">More Info</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
