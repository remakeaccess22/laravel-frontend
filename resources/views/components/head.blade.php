<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'RRRStore') }} {{ $slot }} </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
