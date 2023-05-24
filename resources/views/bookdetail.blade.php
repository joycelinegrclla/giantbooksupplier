@extends('template/temp')

@section('title','Book Detail')

@section('content')

<div class="container">
    <div class="col-8 mx-auto mb-8" style="background-color: grey; font-size: 24px; margin-top:20px; margin-bottom:30px">
        <m-0>Book Detail<m-0>
    </div>
    <div class="col-8 mx-auto mb-8">
        <div class="row">
            <div class="col-4">
                <img src="{{ $book->cover }}" height=240 width=160>
            </div>
            <div class="col-8">
                <p>Title : {{ $book->title }}</p>
                <p>Author : {{ $book->author }}</p>
                <p>Publisher : {{ $book->name }}</p>
                <p>Year : {{ $book->year }}</p>
                <p>Synopsis</p>
                <p>{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
</div>

@endsection