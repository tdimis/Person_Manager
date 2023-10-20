<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <head>
        <title>Add Person</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center">Add New Person</h1>
                    <form method="POST" action="{{ route('persons.store') }}">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="col-5">
                                <label for="first_name" class="form-label">First Name:</label>
                                <input type="text" class="form-control" name="first_name" id="first_name">
                                <span class="form-text">Required only alphanumerical characters. Max 15</span>
                            </div>
                            <div class="col-5">
                                <label for="last_name" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" name="last_name" id="last_name">
                                <span class="form-text">Required only alphanumerical characters. Max 15</span>
                            </div>
                            <div class="col-5">
                                <label for="gender" class="form-label">Gender:</label>
                                <select name="gender" id="gender" class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="form-text">Not required.</span>
                            </div>
                            <div class="col-5">
                                <label for="date_of_birth" class="form-label">Date of Birth:</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                                <span class="form-text">Not required.</span>
                            </div>
                            <div class="col-5" style="margin-top: -7px">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <span class="form-text">Required unique email.</span>
                            </div>
                            <div class="col-5">
                                <label for="phone_number" class="form-label">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone_number" id="phone_number">
                                <span class="form-text">Not required. Must be only numbers. Max 15.</span>
                            </div>
                        </div>
                        <div class="col-10 text-center">
                            <button class="btn btn-primary" type="submit">Add New Person</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
