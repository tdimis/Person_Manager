@extends('layout')
    
    @section('title', 'List Of Persons')


    @section('all_persons_body')

        <form method="GET" action="{{ route('persons.index') }}" style="padding-left: 10px;">
            <input type="text" name="search" placeholder="Search persons" class="btn btn-secondary" style ="padding: 6px 12px; background-color: transparent; color: #495057;">
                <button type="submit" class="btn btn-secondary">Search</button>
                <button type="button" id="showAdvancedSearchBtn" class="btn btn-primary" style ="padding: 6px 12px;">Advanced Search</button>
                    <div id="advancedSearchForm" style="display: none; margin-top: 10px;">
                        <form method="GET" action="{{ route('persons.index') }}">
                            <input type="text" name="first_name" placeholder="First Name" class="btn btn-secondary" style ="padding: 6px 12px; background-color: transparent; color: #495057;">
                            <input type="text" name="last_name" placeholder="Last Name" class="btn btn-secondary" style ="padding: 6px 12px; background-color: transparent; color: #495057;">
                        </form>
                        <button type="submit" class="btn btn-primary">Apply Filters</button>

                        <script>
                            document.getElementById('showAdvancedSearchBtn').addEventListener('click', function () {
                            let advancedSearchForm = document.getElementById('advancedSearchForm');
                            advancedSearchForm.style.display = advancedSearchForm.style.display === 'none' ? 'block' : 'none';
                            });
                        </script>
                    </div>
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
                    @if($persons->isEmpty())
                        <tr>
                            <td colspan="7">No persons found.</td>
                        </tr>
                    @else
                        @foreach($persons as $person)
                        <tr>
                            <td class="text-center">{{ $person->first_name }}</td>
                            <td class="text-center">{{ $person->last_name }}</td>
                            <td class="text-center">{{ $person->gender }}</td>
                            <td class="text-center">{{ $person->date_of_birth }}</td>
                            <td class="text-center">{{ $person->email }}</td>
                            <td class="text-center">{{ $person->phone_number }}</td>
                            <td class="text-center">
                                
                                <div style="display: inline-block;">
                                    <a href="{{ route('persons.edit', $person) }}" title="Edit" data-toggle="tooltip" style="color: orange;">
                                        <i class="material-icons">&#xE254;</i>
                                    </a>
                                </div>

                                <div style="display: inline-block;">
                                    <form method="POST" action="{{ route('persons.destroy', $person) }}">
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
                @endif
            </tbody>
        </table>
        </div>

        <div class="error-container">
            @if(session('update_message'))
                <div class="alert alert-success error-message">
                    <i class="fas fa-check-circle"></i>
                    {{ session('update_message') }}
                </div>
            @endif
            @if(session('delete_message'))
                <div class="alert alert-success error-message">
                    <i class="fas fa-check-circle"></i>
                    {{ session('delete_message') }}
                </div>
            @endif
            @if(session('add_message'))
                <div class="alert alert-success error-message">
                    <i class="fas fa-check-circle"></i>
                    {{ session('add_message') }}
                </div>
            @endif
        </div>
    </body>
</html>

