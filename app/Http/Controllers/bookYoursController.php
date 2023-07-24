<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class bookYoursController extends Controller
{
    public function bookYours()
    {
        $allBooks = Reservation::all();

        return view('bookYours', compact('allBooks'), ["title" => "Book Yours"]);
    }
}
