<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\BookCategory;
use App\Models\Book;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::get();
        dd($category);
        return view('', ['category'=>$category]);
    }

    public function get($categoryid){
        $book = Book::leftJoin('bookcategories', 'books.book_id', '=', 'bookcategories.book_id')
                    ->where('bookcategories.category_id', $categoryid)
                    ->get();
        $category = Category::where('categories.category_id', '=', $categoryid)->first();
        return view('categorydetail', ['book'=>$book, 'category'=>$category]);
    }

}
