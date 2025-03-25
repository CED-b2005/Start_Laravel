<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
    <link rel="stylesheet" type="" href=".\assets\calculator.css">
</head>
<body>   
    <div class="form">
       <form action="{{ route('calculate.sum') }}" method="POST">
        @csrf
        <div>
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" placeholder="Enter the first number">
        </div>
        <div>
            <label for="num2">Number 2:</label>
            <input type="number" name="num2" placeholder="Enter the second number" >
        </div>
        <button type="submit">Calculate</button>
    </form>

    @if (isset($sum))
        <h3>Result: {{ $sum }}</h3>
    @endif 
    </div> 
<h1>{{$hello}}</h1>

</body> 
</html>
