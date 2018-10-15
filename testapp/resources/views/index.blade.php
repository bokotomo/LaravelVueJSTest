<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
      
      <div id="app">
        <app></app>
      </div>
      
      <!-- JS -->
      <script src=" {{ mix('js/app.js') }} "></script>
    </body>
</html>