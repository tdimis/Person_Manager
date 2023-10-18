<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();
        return view('all_persons', ['persons' => $persons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_new_person');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = new Person();
        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->gender = $request->input('gender');
        $person->date_of_birth = $request->input('date_of_birth');
        $person->email = $request->input('email');
        $person->phone_number = $request->input('phone_number');

        $person->save();

        return redirect()->route('persons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Person $person)
    {
        return view('update_person_details', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('persons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    { 
        $person->delete();
        return redirect()->route('persons.index');
    }
}
