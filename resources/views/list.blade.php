@extends('layouts.nav')

@section('title', 'User List')

@section('content')
    <h1>All Users</h1>
    <div class="grid-card">
        @for($i = 0; $i < 5; $i++)
            @include('layouts.card')
        @endfor
    </div>



    <style>
        .grid-card {
            display: flex;
            flex-wrap: wrap; /* Allows items to wrap onto new lines */
            gap: 10px; /* Adds space between items */
        }

        .grid-user {
            flex: 1 1 33%; /* Each item will take up approximately 30% of the row */
            max-width: 30%; /* Prevents items from growing beyond 30% */
            box-sizing: border-box; /* Ensures padding and borders don't affect width */
            margin: 0;
        }

    </style>
@endsection

