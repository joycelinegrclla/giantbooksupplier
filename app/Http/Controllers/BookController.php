<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Publisher;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = Book::get();
        return view('home', ['book'=>$book]);
    }

    public function get($bookid){
        $book = Book::leftJoin('publishers', 'books.publisher_id', '=', 'publishers.publisher_id')
                    ->where('books.book_id', $bookid)
                    ->first();
        return view('bookdetail', ['book'=>$book]);
    }
}
