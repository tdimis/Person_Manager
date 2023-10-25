@extends('layout')
    
    @section('title', 'Update Person')


    @section('update_peron_details_body')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center">Update Person</h1>
                    <form method="POST" action="{{ route('persons.update', $person) }}">
                        @csrf
                        @method('PUT')
                        <div class="row g-3 align-items-center">
                            <div class="col-5">
                                <label for="first_name" class="form-label">First Name:</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name', $person->first_name) }}">
                            </div>
                            <div class="col-5">
                                <label for="last_name" class="form-label">Last Name:</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name', $person->last_name) }}">
                            </div>
                            <div class="col-5">
                                <label for="gender" class="form-label">Gender:</label>
                                <select name="gender" id="gender" class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="">Select Gender</option>
                                    <option value="male" @if(old('gender', $person->gender) === 'male') selected @endif>Male</option>
                                    <option value="female" @if(old('gender', $person->gender) === 'female') selected @endif>Female</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="date_of_birth" class="form-label">Date of Birth:</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $person->date_of_birth) }}">
                            </div>
                            <div class="col-5">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email',$person->email) }}">
                            </div>
                            <div class="col-5">
                                <label for="phone_number" class="form-label">Phone Number:</label>
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{ old('phone_number', $person->phone_number) }}">
                            </div>
                        </div>
                        <div class="col-10 text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('persons.store')  }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
   </body>
</html>
