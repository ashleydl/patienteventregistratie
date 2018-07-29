<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Event;


 class EventController extends Controller
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
         $events = Event::orderBy('id','DESC')->paginate(5);
         return view('event.index',compact('events'))
             ->with('i', ($request->input('page', 1) - 1) * 5);
     }


     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $events = Event::pluck('name', 'date', 'location');
         return view('event/create')->with('events', $events)->with('events', $events);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         $this->validate ( $request, [
             'name_event' => 'required',
             'date_event' => 'required|date_format:Y-m-d',
             'location_event' => 'required',

         ] );
         // Create new Event object with the info in the request
         $event = Event::create ( [
             'name' => $request ['name_event'],
             'date' => $request ['date_event'],
             'location' => $request ['location_event'],
         ] );

         // Save this object in the database
         $event->save ();
         // Redirect to the user.index page with a success message.

         return redirect()->route('event.index')
             ->with('success','Event created successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         return view('event/show', [
             'event' => Event::findOrFail($id),
         ]);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
        return view('event/edit', [
            'event' => Event::findOrFail($id),
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         $this->validate ( $request, [
             'name_event' => 'required',
             'date_event' => 'required|date_format:Y-m-d',
             'location_event' => 'required',
         ]);

         $event = Event::findOrFail ($id);
         $event->name = $request ['name_event'];
         $event->date = $request ['date_event'];
         $event->location = $request ['location_event'];

         //save the change in database
         $event->save ();

         // Redirect to the user.index page with a success message.
         return redirect ( 'event' )->with( 'success', $event->name.'is bijgewerkt.' );
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         Event::findOrFail($id)->delete();
         return redirect('event')->with('success', 'Het evenement is verwijderd.');
     }
 }