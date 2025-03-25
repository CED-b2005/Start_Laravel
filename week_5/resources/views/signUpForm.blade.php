<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Form</title>
    <link rel="stylesheet" href="/assets/style/signUpForm.css">
</head>

<body>

    <div class="container">
        <h1 class="heading">Information Form</h1>
        <form id="infoForm" method="post" action="signUpForm">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" value="{{ old('age') }}">
                @error('age')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" value="{{ old('date') }}">
                @error('date')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="web">Web</label>
                <input type="url" id="web" name="web" value="{{ old('web') }}">
                @error('web')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}">
                @error('address')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">OK</button>
        </form>

        @if (isset($users))
        @foreach ($users as $user)
        <div class="display-info" id="displayInfo">
            <p><strong>Name:</strong> {{ $user['name'] }}</p>
            <p><strong>Age:</strong> {{ $user['age'] }}</p>
            <p><strong>Date:</strong> {{ $user['date'] }}</p>
            <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
            <p><strong>Website:</strong> {{ $user['web'] }}</p>
            <p><strong>Address:</strong> {{ $user['address'] }}</p>
        </div>
        @endforeach
        @endif
    </div>

</body>

</html>