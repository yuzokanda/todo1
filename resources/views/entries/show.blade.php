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
   <entry-show-component></entry-show-component>
   
    {{-- <example-component></example-component> --}}
</div>
<script src="{{mix('js/app.js')}}" defer></script>
</body>
</html>

{{-- @extends('layout')
@section('header')
<div>
  <h1>Entry / Show #{{$entry->id}}</h1>
</div>
@endsection

@section('content')
<div class="card card-body bg-light p-2 mb-4">
  <div class="row">
    <div class="col-md-6">
      <a class="btn btn-sm btn-link" href="{{ route('entries.index') }}">Back</a>
    </div>
    <div class="col-md-6">
      <a class="btn btn-sm btn-warning float-right" href="{{ route('entries.edit', $entry->id) }}">
        Edit
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <label>Entry Name</label>
    <p>
      {{ $entry->entry_name }}
    </p>
    <label>Category</label>
    <p>
      {{ $entry->category }}
    </p>
    <label>Amount</label>
    <p>
      {{ $entry->amount }}
    </p>
    <label>Due Date</label>
    <p>
      {{ $entry->due_date }}
    </p>
  </div>
</div>
@endsection --}}