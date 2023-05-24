<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use App\Models\Book;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publisher = Publisher::get();
        return view('publisher', ['publisher'=>$publisher]);
    }

    public function get($publisherid){
        $publisher = Publisher::where('publishers.publisher_id', '=', $publisherid)->first();
        $book = Book::leftJoin('publishers', 'books.publisher_id', '=', 'publishers.publisher_id')
                    ->where('publishers.publisher_id', '=', $publisherid)
                    ->get();
        return view('publisherdetail', ['publisher'=>$publisher, 'book'=>$book]);
    }
}
