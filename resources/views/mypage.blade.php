<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <h2>Student Information</h2>

                <form action="{{ url('postrequest') }}" method="post">
                    @csrf
                    Name:<br>
                    <input type="text" name="name" value="">
                    <br>
                    Email:<br>
                    <input type="text" name="email" value="">
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>
