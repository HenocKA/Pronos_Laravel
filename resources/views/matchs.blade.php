<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
   </head>
   <body>
   
      @foreach($matchs as $match)
      <div class="affiche">
         <h3>{{ $match->HomeTeam }} VS {{ $match->AwayTeam }}</h3>
         {{ Form::button('1') }} {{ Form::button('n') }} {{ Form::button('2') }}
         </div> 
      @endforeach
     
   </body>
</html>