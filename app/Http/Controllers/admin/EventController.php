<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;

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

        Event::create($request->all());
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
}