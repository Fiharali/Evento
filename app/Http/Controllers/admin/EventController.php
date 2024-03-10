<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Event::paginate(3);
        $categories=Category::all();
        return view('Admin.events.index',compact('events','categories'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {

       $event= Event::create(array_merge($request->all(),['user_id' => Auth::id()]));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $event->addMedia($file)->toMediaCollection('images');
        }
        return redirect()->back()->with(['success' =>' event add successful']);
    }




    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->all());
        return redirect()->back()->with(['success' =>' Event updated successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with(['success' =>' event deleted successful']);
    }


//    public function myEvents(){
//        $events = Event::where('user_id', Auth::id())->paginate(3);
//        $categories=Category::all();
//        return view('Admin.events.index',compact('events','categories'));
//    }

public function adminDashboard(){

    $topUsers = User::withCount('reservations')
        ->orderByDesc('reservations_count')
        ->limit(3)
        ->get();

    $topEvent= Event::withCount('resrvations')
        ->orderByDesc('resrvations_count')
        ->limit(3)
        ->get();

    $reservationAccepted = Reservation::where('status', 1)->count();
    $reservationPending = Reservation::where('status', 0)->count();

   return view('Admin.dashboard.dashboard',compact('topUsers','topEvent','reservationAccepted','reservationPending'));
}

    public function static()
    {
        $categoriesWithEventCounts = Category::withCount('events')->get();
        return response()->json($categoriesWithEventCounts);
    }


}
