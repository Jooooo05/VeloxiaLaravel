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
    
    public function delete($id){
        $reservations = Reservation::find($id);

        $reservations->delete();
        return redirect()->route('bookYours')->with('succes', 'Data berhasil di delete');
    }

    public function addDataToTable(Request $request)
    {
        $reserv = new Reservation();
        $reserv->name = $request->Name;
        $reserv->no_phone = $request->Number;
        $reserv->pax = $request->Guests;
        $reserv->date_order = $request->date;
        $reserv->negotiation = $request->negotiation;
        $reserv->place = $request->Destination;
        $reserv->save();

        return redirect()->route('bookYours');
    }
}
