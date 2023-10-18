@if($persons->count() === 0)
    <h1>No Persons found</h1>
    <a href="{{ route('persons.create') }}">Add New Person</a>
    
@else    
    <h1>List of Persons</h1>

<ul>
    @foreach($persons as $person)
    
        <li>{{ $person->first_name }} {{ $person->last_name }}</li>
            <form method="POST" action="{{ route('persons.destroy', ['person' => $person]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        <a href="{{ route('persons.edit', $person) }}">Edit Details</a>

    @endforeach
</ul>

<button>
    <a href="{{ route('persons.create') }}">Add New Person</a>
</button>

@endif