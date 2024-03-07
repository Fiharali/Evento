<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=Reservation::paginate(3);
        return view('Admin.reservation.index',compact('reservations'));
    }

    public function store(StoreReservationRequest $request)
    {
        Reservation::create($request->all());
        return redirect()->back()->with(['success'=>'success']);
    }

    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        if ($reservation->status == 0) {
            $reservation->status = (string) Reservation::IS_APPROVE;
            $message = 'Reservation approved successfully.';
        } else {
            $reservation->status = (string) Reservation::IS_PENDING;
            $message = 'Reservation refused successfully.';
        }

        $reservation->save();
        return redirect()->back()->with('success', $message);
    }


    public function myReservation(){
        $reservations = Reservation::where('user_id', Auth::id())->paginate(3);
        return view('Admin.reservation.index',compact('reservations'));
    }

}

