<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //


    public function index(){
        $events = Event::where('status',1)->get();
        $categories=Category::all();
        return view('Home.index',compact('events','categories'));
    }


    public function show(Event $event){
        return view('Home.details',compact('event'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $category = $request->input('category');
        $from = $request->input('from');
        $to = $request->input('to');


        $eventsQuery = Event::query();

        if ($query) {
            $eventsQuery->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('title', 'like', "%$query%")
                    ->orWhere('place', 'like', "%$query%");
            });
        }


        if ($category && $category != 0) {
            $eventsQuery->whereHas('category', function ($queryBuilder) use ($category) {
                $queryBuilder->where('id', $category);
            });
        }

        if ($from && $to) {
            $eventsQuery->whereBetween('date', [$from, $to]);
        }

        $events = $eventsQuery->get();

        $eventData = [];

        foreach ($events as $event) {
            $eventData[] = [
                'id' => $event->id,
                'title' => $event->title,
                'place' => $event->place,
                'imageUrl' =>  $event->getFirstMediaUrl('images'),
            ];
        }

        return response()->json($eventData);





    }
}
