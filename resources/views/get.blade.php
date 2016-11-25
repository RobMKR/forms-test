<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div>
            {!! Form::open(['method' => 'post', 'files' => true]) !!}
                {!! Form::text('ticket_number', '', array('placeholder'=>'Ticket Number')) !!}
                {!! Form::submit('Get Ticket') !!}
            {!! Form::close() !!}
        </div>
    </body>
</html>
