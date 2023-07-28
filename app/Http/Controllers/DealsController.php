<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealsController extends Controller
{
    public function deals(){
        $deals = Deal::all();
        return view('deals', compact('deals'), ["title" => "Deals"]);
    }

    public function dealsDetail($id){

        $detail = Deal::find($id);

        return view('dealsDetail', compact('detail'), ["title" => "Vendor Detail"]);
    }
}
