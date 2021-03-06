<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'Valet Dashboard')}}</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div id="app">
        <index></index>
    </div>

    {{-- Scripts --}}
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</body>
</html>
