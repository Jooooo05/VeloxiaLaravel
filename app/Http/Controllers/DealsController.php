<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deals;

class DealsController extends Controller
{
    public function deals(){
        return view('deals', [
            "title" => "Deals"
        ]);
    }
}
