
<!doctype html>

<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>About</title>
    </head>
        
    <body>
        
        <!-- UN-ESCAPED ECHO THE PLAIN PHP WAY -->
        <!--<h1>About: <?= $name; ?></h1>-->
        <!-- ESCAPED ECHO DATA THE LARAVEL WAY -->
        <!--<h1>About: {{ $name }}</h1>-->
        <!-- UN-ESCAPED ECHO THE LARAVEL WAY -->
        <!--<h1>About: {!! $name !!}</h1>-->
        
        <h1>About : {{ $first }}  {{ $last }}</h1>
        
        
        <p>Learn all about....</p>
    </body>
</html>