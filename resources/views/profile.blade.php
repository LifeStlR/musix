<!DOCTYPE html>
<html lang="en">

<head>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" media="all">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Profile Info</h2>
                    <form method="POST"> <!--Will be triggering post request from profile in AuthController-->
                    <!--csrf below is a feature of laravel to protect the web from csrf attacks-->
                    {{ csrf_field() }} 
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="{{$data['name']}}" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="{{$data['role']}}" name="role">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="{{$data['email']}}" name="email" disabled>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Update</button> <!-- Trigger updateprofile function-->
                        </div>
                    </form>
                    <form method="POST" action="deleteprofile"> <!--Will be triggering post request named deleteprofile form AuthController-->
                    {{ csrf_field() }}
                    <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Delete Account</button> <!--Trigger deleteprofile function-->
                        </div>
                        </form>
                    <form action="/">
                    <div class="p-t-10">
                            <button class="btn btn--pill btn--green" href="/">Home</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>