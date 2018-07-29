<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Patient;
use App\Event;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ( 'incident/index', [
            'incidents' => Incident::orderBy('id','asc')->get(),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::pluck('name', 'id');
        $events = Event::pluck('name', 'id');
        return view('incident/create')->with('patients', $patients)->with('events', $events);
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
            'patient_id' => 'required|integer',
            'event_id' => 'required|integer',
            'complaint' => 'required',
            'injury' => 'required|in:Hoofdletsel,Gezichtsletsel,Oogletsel,Nekletsel,Schouderletsel,Rugletsel,Borstletsel,Buikletsel,Armen,Handen,Bovenbeen,Knie,Onderbeen,Enkel,Voet,Onwel,Alcohol,Drugs,Suikerspiegel',
            'abcd' => 'required|boolean',
            'respiration' => 'boolean',
            'avpu' => 'in:yes_verbal,yes_pain,yes_unresponsive,no_alert',
            'circulation' => 'boolean',
            'active_bleeding' => 'boolean',
            'variant_fast' => 'boolean',
            'medicines' => 'required|boolean',
            'relevant_diseases' => 'required|boolean',
            'last_meal' => 'required|date_format:Y-m-d H:i:s',
            'treatment_desc' => '',
            'taken_action' => 'required|in:none,friendsandfamily,bycomplaintscallgp,firstaidorgp,ambulance,deniedtreatment',
            'timeleft' => 'required',
            'additionalcomments' => '',
            'namescaregiver' => 'required|',
            'evaluate_supervisor' => 'required|boolean',
        ] );
        // Create new Role object with the info in the request
        $incident = Incident::create ( [
            'patient_id' => $request ['patient_id'],
            'event_id' => $request ['event_id'],
            'complaint' => $request ['complaint'],
            'injury' => $request ['injury'],
            'abcd' => $request ['abcd'],
            'respiration' => $request ['respiration'],
            'avpu' => $request ['avpu'],
            'circulation' => $request ['circulation'],
            'active_bleeding' => $request ['active_bleeding'],
            'variant_fast' => $request ['variant_fast'],
            'medicines' => $request ['medicines'],
            'relevant_diseases' => $request ['relevant_diseases'],
            'diseases_history' => $request ['diseases_history'],
            'last_meal' => $request ['last_meal'],
            'treatment_desc' => $request ['treatment_desc'],
            'taken_action' => $request ['taken_action'],
            'timeleft' => $request ['timeleft'],
            'additionalcomments' => $request ['additionalcomments'],
            'namescaregiver' => $request ['namescaregiver'],
            'evaluate_supervisor' => $request ['evaluate_supervisor'],
        ] );
        // Save this object in the database
        $incident->save ();
        // Redirect to the user.index page with a success message.
        return redirect ( 'incident' )->with( 'success', 'Het incident is toegevoegd.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('incident/show', [
            'incident' => Incident::findOrFail($id),
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
        $patients = Patient::pluck('name', 'id');
        $events = Event::pluck('name', 'id');
        return view('incident/edit', [
            'incident' => Incident::findOrFail($id),
        ])->with('patients', $patients)->with('events', $events);
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
            'patient_id' => 'required|integer',
            'event_id' => 'required|integer',
            'complaint' => 'required',
            'injury' => 'required|in:Hoofdletsel,Gezichtsletsel,Oogletsel,Nekletsel,Schouderletsel,Rugletsel,Borstletsel,Buikletsel,Armen,Handen,Bovenbeen,Knie,Onderbeen,Enkel,Voet,Onwel,Alcohol,Drugs,Suikerspiegel',
            'abcd' => 'required|boolean',
            'respiration' => 'boolean',
            'avpu' => 'in:yes_verbal,yes_pain,yes_unresponsive,no_alert',
            'circulation' => 'boolean',
            'active_bleeding' => 'boolean',
            'variant_fast' => 'boolean',
            'medicines' => 'required|boolean',
            'relevant_diseases' => 'required|boolean',
            'last_meal' => 'required|date_format:Y-m-d H:i:s',
            'treatment_desc' => '',
            'taken_action' => 'required|in:none,friendsandfamily,bycomplaintscallgp,firstaidorgp,ambulance,deniedtreatment',
            'timeleft' => 'required',
            'additionalcomments' => '',
            'namescaregiver' => 'required|',
            'evaluate_supervisor' => 'required|boolean',
        ] );

        $input = $request->all();
        $incident = Incident::findorfail($id);
        $updateNow = $incident->update($input);

        // Redirect to the user.index page with a success message.
        return redirect ( 'incident' )->with( 'success', 'Het incident is bijgewerkt.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Incident::findOrFail($id)->delete();
        return redirect('incident')->with('success', 'Het incident is verwijderd.');
    }
}