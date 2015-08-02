<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="title" content="Flickr">
        <meta name="description" content="Flickr Gallery">
        <meta name="author" content="Alexis Ribault">

        <title>Flickr</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home')  }}">Flickr</a>
            </div>
        </nav>

        @yield('main')

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>