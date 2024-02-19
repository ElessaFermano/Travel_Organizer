@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Organizer</title>
    
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <h1>Plan Your Trip</h1>
        <form action="#" method="post">
            <label for="tripName">Trip Name:</label>
            <input type="text" id="tripName" name="tripName" placeholder="Enter trip name" required>
            <label for="travelDates">Travel Dates:</label>
            <input type="date" id="travelDates" name="travelDates" required>
            <label for="preferredDestinations">Preferred Destinations:</label>
            <input type="text" id="preferredDestinations" name="preferredDestinations" placeholder="Enter destination">
            <button type="submit">Create Trip</button>
        </form>
    </div>
</body>
</html>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
