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
        <div class="content">
            <div class="physical">
                <div class="container">
                    <h3> Physical </h3>
                    <hr>
                    <div class="row">
                        {!! Form::open(['method' => 'post', 'files' => true]) !!}

                        <div>{!! Form::text('name', '', array('placeholder'=>'Name')) !!}</div>
                        <div>{!! Form::text('surname', '', array('placeholder'=>'SurName')) !!}</div>
                        <div>{!! Form::text('address', '', array('placeholder'=>'Address')) !!}</div>
                        <div>{!! Form::text('citizenship', '', array('placeholder'=>'Citizenship')) !!}</div>
                        <div>{!! Form::text('tel', '', array('placeholder'=>'Phone number')) !!}</div>
                        <div>{!! Form::text('email', '', array('placeholder'=>'Email')) !!}</div>
                        <div>{!! Form::text('subject', '', array('placeholder'=>'Subject')) !!}</div>
                        <div>{!! Form::textarea('message', '', array('placeholder'=>'Message')) !!}</div>
                        <div>
                            <label for="">Notification type: </label>
                            <label for="">Email</label>{!! Form::radio('notification', 'email', false) !!}
                            <label for="">Message</label>{!! Form::radio('notification', 'message') !!}
                        </div>

                        <div>{!! Form::file('file') !!}</div>
                        {!! Form::hidden('type', 'physical') !!}
                        {!! Form::submit('Add Ticket') !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="container">
                <h3> Juridical </h3>
                <hr>
                <div class="row">
                    {!! Form::open(['method' => 'post', 'files' => true]) !!}

                    <div>{!! Form::text('company', '', array('placeholder'=>'Company')) !!}</div>
                    <div>{!! Form::text('address', '', array('placeholder'=>'Address')) !!}</div>
                    <div>{!! Form::text('register_number', '', array('placeholder'=>'Register Number')) !!}</div>
                    <div>{!! Form::text('co_info', '', array('placeholder'=>'Co Info')) !!}</div>
                    <div>{!! Form::text('tel', '', array('placeholder'=>'Phone number')) !!}</div>
                    <div>{!! Form::text('email', '', array('placeholder'=>'Email')) !!}</div>
                    <div>{!! Form::text('subject', '', array('placeholder'=>'Subject')) !!}</div>
                    <div>{!! Form::textarea('message', '', array('placeholder'=>'Message')) !!}</div>
                    <div>
                        <label for="">Notification type: </label>
                        <label for="">Email</label>{!! Form::radio('notification', 'email', false) !!}
                        <label for="">Message</label>{!! Form::radio('notification', 'message') !!}
                    </div>

                    <div>{!! Form::file('file') !!}</div>
                    {!! Form::hidden('type', 'juridical') !!}
                    {!! Form::submit('Add Ticket') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
            <br/>
        </div>
    </body>
</html>
