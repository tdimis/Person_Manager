<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <head>
        <title>Update Person</title>
    </head>
    <body>
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
                                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name', $person->first_name) }}">
                            </div>
                            <div class="col-5">
                                <label for="last_name" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name', $person->last_name) }}">
                            </div>
                            <div class="col-5">
                                <label for="gender" class="form-label">Gender:</label>
                                <select name="gender" id="gender" class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="date_of_birth" class="form-label">Date of Birth:</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $person->date_of_birth) }}">
                            </div>
                            <div class="col-5">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email',$person->email) }}">
                            </div>
                            <div class="col-5">
                                <label for="phone_number" class="form-label">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number', $person->phone_number) }}">
                            </div>
                        </div>
                        <div class="col-10 text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <style>
        .error-container {
            position: fixed;
            bottom: 0;
            right: 0;
            padding: 15px;
            text-align: right;
        }
        .error-message {
            display: inline-block;
            margin-right: 10px;
        }
        </style>
        <div class="error-container">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger error-message">
                    <i class="fas fa-exclamation-triangle"></i>
                    {{ $error }}
                </div>
            @endforeach
        </div>
   </body>
</html>
