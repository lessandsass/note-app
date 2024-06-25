<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])

    <title>Note App</title>
</head>
<body>

    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 6000)"
    >
        @session('message')
            <div class="success-message">
                {{ session('message') }}
            </div>
        @endsession
    </div>

    <div>
        {{ $slot }}
    </div>

</body>
</html>
