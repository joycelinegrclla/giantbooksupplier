@extends('template/temp')

@section('title','Publisher Detail')

@section('content')

<div class="row">
  <div class="col-8 mx-auto" style="background-color: grey; font-size: 24px; margin-top:20px; margin-bottom:30px;">
    <m-0>Publisher Detail<m-0>
  </div>
  <div class="col-8 mx-auto mb-8">
        <div class="row">
            <div class="col-3">
                <img src="{{ $publisher->logo }}" height=160 width=160>
            </div>
            <div class="col-9">
                <p>Name : {{ $publisher->name }}</p>
                <p>Address : {{ $publisher->address }}</p>
                <p>Phone : {{ $publisher->phone }}</p>
                <p>Email : {{ $publisher->email }}</p>
            </div>
        </div>
    </div>
  <div class="col-8 mx-auto">
    <div class="row justify-content-center p-3">
      @foreach($book as $book)
        <div class="col-md-3">
          <div class="card m-3 d-flex flex-column" style="width: 12rem;">
            <img src="{{ $book->cover }}" class="card-img-top img-fluid" height="120" width="80">
            <div class="card-body" style="height: 100%;">
              <h5 class="card-title" style="font-size: 14px;">{{ $book->title }}</h5>
              <p class="card-text" style="font-size: 12px;">by</p>
              <p class="card-text" style="font-size: 12px;">{{ $book->author }}</p>
              <a href="{{ route('book-detail', $book->book_id) }}" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection