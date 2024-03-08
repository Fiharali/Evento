<?php

namespace App\Http\Controllers\organizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    //



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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $event->addMedia($file)->toMediaCollection('images');
        }
        return redirect()->back()->with(['success' =>' Event updated successful']);
    }

    public function myEvents(){
        $events = Event::where('user_id', Auth::id())->paginate(3);
        $categories=Category::all();
        return view('Admin.events.index',compact('events','categories'));
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with(['success' =>' event deleted successful']);
    }
}
