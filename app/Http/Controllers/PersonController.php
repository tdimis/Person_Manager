<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\search;
use App\Http\Requests\PersonStoreRequest;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
    
        $persons = Person::query();
    
        if ($search) {
            $persons->where('first_name', 'LIKE', "%$search%")
                    ->orWhere('last_name', 'LIKE', "%$search%")
                    ->orWhere('gender', 'LIKE', "%$search%");
        }

        if($first_name && $last_name) {
            $persons = $persons->where('first_name', 'LIKE', "%$first_name%")
                    ->where('last_name', 'LIKE', "%$last_name%")
                    ->get();
        }

        $persons->orderBy('created_at', 'desc');
    
        $persons = $persons->paginate(5);
    
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

        $rules = [
            'first_name' => 'required|alpha_num|max:15',
            'last_name' => 'required|alpha_num|max:15',
            'gender' => ['nullable', Rule::in(['male', 'female'])],
            'date_of_birth' => 'nullable|date',
            'email' => 'required|email|unique:persons,email',
            'phone_number' => 'nullable|regex:/^[0-9()-]+$/',
        ];

        $customMessages = [
            'phone_number.regex' => 'The phone number must contain only numbers, parentheses, and hyphens (e.g., (555) 555-5555).',
        ];
    
        $validatedData = $request->validate($rules,$customMessages);

        $person = new Person();

        $person->fill($validatedData);

        $person->save();

        return redirect()->route('persons.index')->with('add_message', 'Person added successfully!');
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
        $rules = [
            'first_name' => 'required|alpha_num|max:15',
            'last_name' => 'required|alpha_num|max:15',
            'gender' => ['nullable', Rule::in(['male', 'female'])],
            'date_of_birth' => 'nullable|date',
            'phone_number' => 'nullable|regex:/^[0-9()-]+$/',
            'email' => 'required|email|unique:persons,email,' . $person->id,
        ];

        $customMessages = [
            'phone_number.regex' => 'The phone number must contain only numbers, parentheses, and hyphens (e.g., (555) 555-5555).',
        ];

        $validatedData = $request->validate($rules,$customMessages);

        $person->update($validatedData);
        
        return redirect()->route('persons.index')->with('update_message', 'Person updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    { 
        $person->delete();
        return redirect()->route('persons.index')->with('delete_message', 'Person deleted successfully!');
    }
}
