{{-- modificare la rotta del get nel web.php prima 
    prima di pushare
    disattivare il commento e cancellare comics.show

    rimettere nel get nel web.php comics.show quando riprendi a lavorare
--}}



@extends('layouts.default')

@section("page_title", "Comic Details")

@section("main_content")

<div class="container ">

    <div class="w-25 py-5"><img class="w-100" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX {{-- {{ comic['thumb'] }} --}}" alt="{{-- {{ $comic['title'] }} --}}"></div>

    <h1 class="">{{-- {{ $comic['title'] }} --}} Action Comics #1000: The Deluxe Edition</h1>

    <div class="bg-success py-3 d-flex justify-content-around"> 
        <p class="m-0"> <strong> Price : </strong> {{-- {{ $comic['price'] }} --}} 9.99$</p>
        <p class="m-0"> <strong> Series : </strong> {{-- {{ $comic['series'] }} --}} Action Comics</p>
        <p class="m-0"> <strong> Series : </strong> {{-- {{ $comic['sale_date'] }} --}} 2018-10-02</p>
    </div>

    <p class="w-50 mt-1">{{-- {{ $comic['description'] }} --}}The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>

</div>

@endsection