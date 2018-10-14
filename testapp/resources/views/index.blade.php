<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <!-- JS -->
        <script src=" {{ mix('js/app.js') }} "></script>
    </head>
    <body>
      <div id="app">
        @{{ message }}
        <example-component2></example-component2>
      </div>

      <script>
        var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello Vue!'
        }
      })
      </script>
    </body>
</html>