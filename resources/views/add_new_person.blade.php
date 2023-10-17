<!DOCTYPE html>

<html>
    
    <head>
        <title>Add New User</title>
    </head>

    <body>

        <h1>Add New User</h1>
        
        <form method="POST" action="{{ route('persons.store') }}">
    

            <div>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name">
            </div>


            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name">
            </div>


            <div>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>


            <div>
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" id="date_of_birth">
            </div>
    
    
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
    
    
            <div>
                <label for="phone_number">Phone Number:</label>
                <input type="tel" name="phone_number" id="phone_number">
            </div>
        
            <button type="submit">Add Person</button>

        </form>
    </body>

</html>
