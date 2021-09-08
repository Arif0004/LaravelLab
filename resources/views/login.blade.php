<!DOCTYPE html>
<html lang="en">
<head>

    <title>login from design</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            /* background: url(pic1.jpg) center;*;

             */
            background-color: red;
            background-size:cover ;
            font-family: sans-serif;
        }
        .loginbox{
            width: 320px;
            height: 420px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;


        }
        .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50%;
            left: calc(50% - 50px);

        }
        h1{
            margin: 0;
            padding: 0 0 20px;
            font-size: 22px;

        }
        .loginbox p{
            margin: 0;
            padding: 0;
            font-weight: bold;

        }
        .loginbox iput{
            width: 100%;
            margin-bottom: 20px;
        }
        .loginbox input[type="text"],input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent ;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;

        }
        .loginbox input[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;

        }
        .loginbox input[type="submit"]:hover
        {
            cursor: pointer;
            background: #ffc107;
            color: #000;

        }
        .loginbox a{
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }
        .loginbox a:hover
        {
            color: #ffc107;
        }
    </style>
<body >
<div class="loginbox">
    <img src="{{asset('image')}}/avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form>
        <p>User name</p>
        <input type="text" name="" placeholder="Enter username">
        <p>password</p>
        <input type="password" name="" placeholder="Enter password"><br><br>
        <input type="submit" name="" value="Login"> <br><br>
        <a href="#"> Lost your password</a><br>
        <a href="{{url('/reg')}}" >Don't have an account</a>
    </form>
</div>
</body>
</head>
</html>
