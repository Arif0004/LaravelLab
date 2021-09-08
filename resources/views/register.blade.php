
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,500&display=swap" rel="stylesheet">
    <link href="{{asset('res/css/app.css')}}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="box">
    <form action="{{url('/save_user')}}" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Register</h1>
        <p>Create your account. It's free and only takes a minute</p>
        <div class="row">
            <input class="this controll half mr" type="text" placeholder="First name" name="first_name">
            <input class="this controll half" type="text" placeholder="Last email" name="last_name">

        </div>
        <div class="row">
            <input class="this controll" type="email" placeholder="email" name="email">
        </div>

        <div class="row">
            <input class="this controll"  type="password" placeholder="password" name="password" >
        </div>
        <div class="row">
            <input class="this controll"  type="password" placeholder="Confirm password" >
        </div>

        <div style="text-align:left;" class="row">
            <input class="checkbox" type="checkbox"> <span>I accept the terms and condition</span>
        </div>

        <div class="row">
            <button class="btn">Register Now</button>
        </div>

    </form>

</div>
<p >already have an account?<a style="text-decoration: none;" href="{{url('/')}}">sign up</a> </p>
</body>
</html>
