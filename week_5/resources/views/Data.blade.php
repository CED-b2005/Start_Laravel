<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Data</title>
</head>
<body>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Country</th>
                <th>Total Confirmed</th>
                <th>Total Deaths</th>
                <th>Total Recovered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['Countries'] as $country)
            <tr>
                <td>{{ $country['Country'] }}</td>
                <td>{{ $country['TotalConfirmed'] }}</td>
                <td>{{ $country['TotalDeaths'] }}</td>
                <td>{{ $country['TotalRecovered'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
