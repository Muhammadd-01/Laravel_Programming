<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $name = 'user'?>
{{--
@if ($name == 'user')
    <h1>Hello user</h1>

@endif --}}

@if ($name == 'user')

<h1>Hey user</h1>

@else

<h1>Error Check kro Broo</h1>


@endif



</body>
</html>
