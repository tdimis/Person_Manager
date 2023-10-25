<!DOCTYPE html>
<html>
    
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title> @yield('title')</title>

</head>

    <body>
        <div>
            @yield('all_persons_body')
            @yield('update_person_details_body')
            @yield('add_new_person_body')
        </div>
       <!-- Alert messages for add and update person forms -->
        <div class="error-container">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger error-message">
                        <i class="fas fa-exclamation-triangle"></i>
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div> 
    </body>
</html>