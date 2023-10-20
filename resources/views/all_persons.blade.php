<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



@if($persons->count() === 0)
<div class="text-center" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <h1>No Persons found</h1>
    <div style="margin-top: 20px;">
        <a href="{{ route('persons.create') }}" class="btn btn-primary">Add Person</a>
    </div>
</div>

@else    

<form method="GET" action="{{ route('persons.index') }}" style="padding-left: 10px;">
    <input type="text" name="search" placeholder="Search persons">
    <button type="submit">Search</button>
</form>


<div class="container-fluid">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0;">List of Persons</h2>
        <a href="{{ route('persons.create') }}" class="btn btn-primary" style="margin-top: -10px;">Add Person</a>
    </div>

    <table class="table table-bordered w-100" style="width: 100%;" class="center-table">
        <thead>
            <tr>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Date of Birth</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($persons as $person)
            <tr>
                <td class="text-center">{{ $person->first_name }}</td>
                <td class="text-center">{{ $person->last_name }}</td>
                <td class="text-center">{{ $person->gender }}</td>
                <td class="text-center">{{ $person->date_of_birth }}</td>
                <td class="text-center">{{ $person->email }}</td>
                <td class="text-center">{{ $person->phone_number }}</td>
                <td class ="text-center">
                    <div style="display: inline-block;">
                        <a href="{{ route('persons.edit', $person) }}" title="Edit" data-toggle="tooltip" style="color: orange;">
                            <i class="material-icons">&#xE254;</i>
                        </a>
                    </div>
                    <div style="display: inline-block;">
                        <form method="POST" action="{{ route('persons.destroy', ['person' => $person]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete" data-toggle="tooltip" style="color: red;">
                                <i class="material-icons">&#xE872;</i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endif

{{ $persons->links('pagination::bootstrap-5') }}</div>