<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('guest');
    }

    public function submitForm(Request $request) {

        $validated = $request->validate([
            'maFirstname' => 'required',
            'maLastname' => 'required',
            'maEmail' => 'required|email',
            'maContactnumber' => 'required|min:11',
            'maAddress' => 'required',
            'maCheckInDate' => 'required|date',
            'maRoom' => 'required',
            'maDays' => 'required|numeric',
            'maPax' => 'required|numeric',
            'maSpecialRequest' => 'nullable'
        ]);

        $roomPrices = [
            'standard' => 1500,
            'deluxe' => 3000,
            'suite' => 4500
        ];

        $roomPrice = $roomPrices[$validated['maRoom']];
        $totalPrice = $roomPrice * $validated['maDays'];

        $validated['totalPrice'] = $totalPrice;
        $validated['maRoomPrice'] = $roomPrice;

        session(['guest_data' => $validated]);
        return redirect()->route('display')->with('success', 'Booking completed!');
    }

    public function display(Request $request) 
    {
        $guestData = session('guest_data');

        if (!$guestData) {
            return redirect()->route('index')->with('error', 'Please fill up the form completely.');
        }

        return view('display', ['guest' => $guestData]);
    }
}