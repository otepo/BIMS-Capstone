<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{   

    // show all events
    public function index() {
        return view("events.index", [
            "events" => Event::latest()
            ->filter(request(["tag", "search"]))
            ->paginate(4)
        ]);
    }


    // show single event
    public function show(Event $event) {
        return view("events.show", [
            "event" => $event
        ]);

    }


    public function create() {
        return view("events.create");
    }

    //store event data
    public function store(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            "title" => "required",
            "location" => "required",
            "tags" => "required",
            "description" => "required",
            "when" => "required",


        ]);

        if($request->hasFile("image")) {
            $formFields["image"] = $request->file("image")->store("images", "public");
        }

        Event::create($formFields);

        return redirect("/dashboard/events")
        ->with("message", "Event created successfully!");
    }

    //Show edit form
    public function edit(Event $event) {
        return view("events.edit", ["event" => $event]);
    }

    //update event data
    public function update(Request $request, Event $event) {
        $formFields = $request->validate([
            "title" => "required",
            "location" => "required",
            "tags" => "required",
            "description" => "required",
            "when" => "required",

        ]);

        if($request->hasFile("image")) {
            $formFields["image"] = $request->file("image")->store("images", "public");
        }

        $event->update($formFields);

        return back()
        ->with("message", "Event updated successfully!");
    }

    //delete event
    public function destroy(Event $event) {
        $event->delete();
        return redirect("/dashboard/events")->with("message", "Event deleted sucessfully!");
    }
    //show all events in home
    public function events() {
        return view("events", ["events" => Event::latest()
        ->filter(request(["tag", "search"]))
        ->paginate(4)]);
    }
        // show single event in home
        public function showevent(Event $event) {
            return view("showevent", [
                "event" => $event
            ]);
    
        }

}
