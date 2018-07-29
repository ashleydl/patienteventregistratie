<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ( 'location/index', [
            'locations' => Location::orderBy('id','asc')->get(),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location/create');
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
            'city' => 'required|max:255',
            'postcode' => 'required|max:255',
            'straat' => 'required|max:255',
            'nummer' => 'required|max:255',
            'toevoeging' => 'max:255',
        ] );
        // Create new Location object with the info in the request
        $location = Location::create ( [
            'city' => $request ['city'],
            'postcode' => $request ['postcode'],
            'straat' => $request ['straat'],
            'nummer' => $request ['nummer'],
            'toevoeging' => $request ['toevoeging'],
        ] );
        // Save this object in the database
        $location->save ();
        // Redirect to the user.index page with a success message.
        return redirect ( 'location' )->with( 'success', $location->name.' is toegevoegd.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('location/show', [
            'location' => Location::findOrFail($id),
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
        return view('location/edit', [
            'location' => Location::findOrFail($id),
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
        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'city' => 'required|max:255',
            'postcode' => 'required|max:255',
            'straat' => 'required|max:255',
            'nummer' => 'required|max:255',
            'toevoeging' => 'max:255',
        ] );

        $location = Location::findorfail ( $id );
        $location->city = $request ['city'];
        $location->postcode = $request ['postcode'];
        $location->straat = $request ['straat'];
        $location->nummer = $request ['nummer'];
        $location->toevoeging = $request ['toevoeging'];
        // Save the changes in the database
        $location->save ();

        // Redirect to the user.index page with a success message.
        return redirect ( 'location' )->with( 'success', $location->name.' is bijgewerkt.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::findOrFail($id)->delete();
        return redirect('location')->with('success', 'De locatie is verwijderd.');
    }
}
