<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sign.css') }}">   

</head>
<body>
    <form action="{{ route('signup.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age">
        </div>

        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="form-group">
            <label>Web</label>
            <input type="url" class="form-control" name="web">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('block.error')
        <div class="display-infor">
            @if(isset($userSession))
                @foreach($userSession as $user)
                    <p>Name: {{ $user['name'] }}</p>
                    <p>Age: {{ $user['age'] }}</p>
                    <p>Date: {{ $user['date'] }}</p>
                    <p>Phone: {{ $user['phone'] }}</p>
                    <p>Web: {{ $user['web'] }}</p>
                    <p>Address: {{ $user['address'] }}</p>
                    <hr>
                @endforeach
            @endif
        </div>
<!-- 
    <div class="display-infor">
        @if(isset($user))
        <p>Name: {{ $user['name'] }}</p>
        <p>Age: {{ $user['age'] }}</p>
        <p>Date: {{ $user['date'] }}</p>
        <p>Phone: {{ $user['phone'] }}</p>
        <p>Website: {{ $user['web'] }}</p>
        <p>Address: {{ $user['address'] }}</p>
        @endif
    </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.5.1/js/bootstrap.min.js"></script>
</body>

</html>