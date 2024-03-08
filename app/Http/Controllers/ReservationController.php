<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


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
        if ($request->status==1){

            $event = Event::find($request->event_id);

            $event->decrement('places_number', $request->number_ticket);

            $pdf = PDF::loadView('Home.ticket.ticket', ['event' => $event]);

            return $pdf->download('ticket.pdf');
           // return redirect()->back()->with(['success'=>'Your Reservation has Completed With Success , You Can Get Your Ticket Now  ']);

        }else{
            return redirect()->back()->with(['success'=>"Your Reservation Completed With Success , But You Can't Get Your Ticket Now  until you reservation confirmed "]);
        }
    }

    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        if ($reservation->status == 0) {
            $reservation->status = (string) Reservation::IS_APPROVE;

            $event = Event::find($reservation->event_id);
            $event->decrement('places_number', $reservation->number_ticket);

            $message = 'Reservation approved successfully.';
        } else {
            $reservation->status = (string) Reservation::IS_PENDING;
            $message = 'Reservation refused successfully.';
        }

        $reservation->save();
        return redirect()->back()->with('success', $message);
    }


    public function myReservation(){
        $reservations = Reservation::whereHas('event', function ($query) {
            $query->where('user_id', Auth::id());
        })->paginate(3);
        return view('Admin.reservation.index',compact('reservations'));
    }

    public function getTicket($eventId)
    {

        $event = Event::find($eventId);
        $pdf = PDF::loadView('Home.ticket.ticket', ['event' => $event]);
        return $pdf->download('ticket.pdf');
    }

}

