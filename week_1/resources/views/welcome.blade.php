<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">   
</head>
<body>
    <form method="POST">
        @csrf  
        <label for="num1">Enter số A:</label>
        <input type="number" name="num1" required value="{{ old('num1', $num1 ?? '') }}">
        <br><br>

        <label for="num2">Enter số B:</label>
        <input type="number" name="num2" required value="{{ old('num2', $num2 ?? '') }}">
        <br><br>

        <input type="submit" value="Submit">

        @if(isset($sum))
            <h3>Result: {{ $sum }}</h3>
        @endif
    </form>
</body>
</html>
