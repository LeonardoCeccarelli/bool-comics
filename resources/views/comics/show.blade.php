{{-- modificare la rotta del get nel web.php prima 
    prima di pushare
    disattivare il commento e cancellare comics.show

    rimettere nel get nel web.php comics.show quando riprendi a lavorare
--}}



@extends('layouts.default')

@section("page_title", "Comic Details")

@section("main_content")

<div class="container ">
    <div class="d-flex align-items-center justify-content-around">
        
        {{-- ARROW LEFT --}}
        <a id="arrow_left" href='' class="btn button fs-1">&#x25C0;</a>

        <div class="w-25 {{-- m-auto --}} p-5"><img class="w-100" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></div>
    
        {{-- ARROW RIGHT --}}
        <a id="arrow_right" href='' class="btn button fs-1">&#x25B6;</a>
        

    </div>

    <h1 class="">{{ $comic['title'] }}</h1>

    <div class="bg-success py-3 d-flex justify-content-around"> 
        <p class="m-0"> <strong> Price : </strong>{{ $comic['price'] }}</p>
        <p class="m-0"> <strong> Series : </strong>{{ $comic['series'] }}</p>
        <p class="m-0"> <strong> Series : </strong>{{ $comic['sale_date'] }}</p>
    </div>

    <div class="d-flex flex-shrink">
        <p class="w-50 mt-4">{{ $comic['description'] }}</p>
        
        <div class="d-flex flex-column align-items-center justify-content-center flex-grow-1">

            <div class="pb-2"><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success ">Edit</a></div>  
            
            {{-- BUTTON DESTROY --}}
            <form class="pt-2" action="{{ route('comics.destroy', $comic->id) }}" method="post">
                @csrf
                
                @method('DELETE')
                
                <button type="submit" class="btn btn-danger">Delete</button>
                
            </form>
            <span class='d-none' id='count'>{{count($comics) }}</span >

        </div>
    </div>
</div>

<script>
    const left = document.getElementById('arrow_left')
    const right = document.getElementById('arrow_right')
    /** @type {!number} */
    const currentUri = window.location.pathname.split('/')
    const currentIndex = currentUri[2]

    const count = document.getElementById('count').innerText


    if(currentIndex == 1){
        left.style.display = "none";
    }  
    if(currentIndex == count){
        right.style.display = "none";
    }  

    left.addEventListener('click', function(){
        console.log(currentUri)
        left.href=currentIndex - 1 ;    
    })

    right.addEventListener('click', function(){
            
        right.href= parseInt(currentIndex) + 1; 
    })
</script>
@endsection

{{-- 
    io ho tot elementi 
    quando sono all'el 3 schiacciando la freccia back voglio andare all'id 2
    --}}