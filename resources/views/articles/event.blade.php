@extends ('layouts.layout')

    @section ('content')

        <!-- The view of the blogs page, view all blog titles (links) and publication dates -->
        <h1> Event calendar </h1>
        <p> Keep track on what your favorite bloggers are doing! </p>
        <div id="eventBtn"><a href="/event/create">Add Event</a></div>

<!doctype html>

<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">

            Event calendar    

        </div>

        <div class="panel-body" >

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>

    </div>

</div>

</body>

</html>

    @endsection