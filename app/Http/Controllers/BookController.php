<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    return view('frontpage.book', ['booking' => "book"]);
}