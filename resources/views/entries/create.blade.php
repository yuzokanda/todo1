<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel_kakeibo') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">  
</head>
<body>
<div id="app">
  <App></App>
   <entry-create-component></entry-create-component>
   
    {{-- <example-component></example-component> --}}
</div>
<script src="{{mix('js/app.js')}}" defer></script>
</body>
</html>