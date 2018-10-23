<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CAMP SILAH</title>

</head>
<body>
    <div class="container grid background-grid">
        <div class="grid-item col1"><p>1</p></div>
        <div class="grid-item col1"><p>2</p></div>
        <div class="grid-item col1"><p>3</p></div>
        <div class="grid-item col1"><p>4</p></div>
        <div class="grid-item col1"><p>5</p></div>
        <div class="grid-item col1"><p>6</p></div>
        <div class="grid-item col1"><p>7</p></div>
        <div class="grid-item col1"><p>8</p></div>
        <div class="grid-item col1"><p>9</p></div>
        <div class="grid-item col1"><p>10</p></div>
        <div class="grid-item col1"><p>11</p></div>
        <div class="grid-item col1"><p>12</p></div>
    </div>

    @yield('content')
</body>
</html>
