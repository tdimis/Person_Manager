<h1>Edit Person</h1>

<form method="POST" action="{{ route('persons.update', $person) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="{{ $person->first_name }}">
    </div>

    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="{{ $person->last_name }}">
    </div>


    <div>
        <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="male" {{ $person->gender === 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $person->gender === 'female' ? 'selected' : '' }}>Female</option>
            </select>
    </div>


    <div>
        <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $person->date_of_birth }}">
    </div>
    
    
    <div>
        <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $person->email }}">
    </div>
    
    
    <div>
        <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number" value="{{ $person->phone_number }}">
    </div>

    <button type="submit"> Update Person </button>

</form>
