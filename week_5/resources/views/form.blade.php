<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/assets/style/form.css">
</head>

<body>
    <div class="container">
        <form method="POST" action="sum">
            @csrf
            <label for="soA">
                Enter so A
                <input name="soA" type="number">
            </label><br><br>
            <label for="soB">
                Enter so B
                <input name="soB" type="number">
            </label><br><br>
            <button type="submit" class="btn btn-submit">Submit</button>

            @if (isset($sum))
            <p class="result">Result: {{$sum}}</p>
            @endif
        </form>
    </div>
</body>

</html>