<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //


    public function index(){
        $events=Event::all();
        return view('Home.index',compact('events'));
    }


    public function show(Event $event){
        return view('Home.details',compact('event'));
    }
}
