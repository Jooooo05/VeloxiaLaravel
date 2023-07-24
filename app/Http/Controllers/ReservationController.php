<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function reservation()
    {
        // $reservations = Reservation::all();

        return view('reservation', [
            "title" => "resesrvartion"
        ]);
    }

    public function addDataToTable(Request $request)
    {
        $reserv = new Reservation();
        $reserv->name = $request->Name;
        $reserv->no_phone = $request->Number;
        $reserv->pax = $request->Guests;
        $reserv->date_order = $request->date;
        $reserv->place = $request->Destination;
        $reserv->save();

        return redirect()->route('reservation');
    }
}
