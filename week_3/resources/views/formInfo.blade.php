<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Form Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }
        label {
            font-weight: bold;
            width: 100px;
        }
        input {
            width: 250px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #218838;
        }
        .display-infor {
            width: 420px;
            padding: 15px;
            background: #e9ecef;
            border-radius: 5px;
            margin-top: 10px;
        }
        .display-infor p {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
        }
        .user-card {
            background: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form action="{{ route('displayInfor') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">   
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" value="{{ old('age') }}">
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="text" name="date" value="{{ old('date') }}">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
    </div>
    <div class="form-group">
        <label>Website</label>
        <input type="text" name="web" value="{{ old('web') }}">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{ old('address') }}">
    </div>
            <div>@include ('block.error')</div>
    <button type="submit">OK</button>
</form>

    <h2>Stored Information</h2>
    @if (!empty($users))
        @foreach ($users as $user)
            <div class="display-infor user-card">
                <p><strong>Name:</strong> {{ $user['name'] }}</p>
                <p><strong>Age:</strong> {{ $user['age'] }}</p>
                <p><strong>Date:</strong> {{ $user['date'] }}</p>
                <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
                <p><strong>Website:</strong> {{ $user['web'] }}</p>
                <p><strong>Address:</strong> {{ $user['address'] }}</p>
            </div>
        @endforeach
    @else
        <p>No information stored yet.</p>
    @endif
</body>
</html>
