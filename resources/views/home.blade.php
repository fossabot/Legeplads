<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lasse's Legeplads</title>
    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    {{
    $yes = false,
    $streamText = "I'LL BE RIGHT BACK!"
     }}
    @if($yes === true)
        @include('layout.components.menu')
    @else
    @endif
</header>
<div class="flex-center full-height">
    <div class="content">
        <div class="title m-b-md animated pulse infinite">
            {{ $streamText }}
        </div>
    </div>
</div>
<script href="js/app.js" type="text/javascript"></script>
</body>
</html>
