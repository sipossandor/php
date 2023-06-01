<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    // GET localhost:8000/api/books/list
    public function list()
    {
        $books = Books::all();
        return [
            "status" =>'OK',
            "data" => $books
        ];
    }
}
