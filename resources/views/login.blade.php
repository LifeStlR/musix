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
                    <h2 class="title">Login</h2>
                    <form method="POST"> <!--Will be triggering post request from login in AuthController-->
					 <!-- login form with class card in bootstrap, while the csrf is below is a feature of laravel to protect the web from csrf attacks-->
					{{ csrf_field() }}
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Login</button> <!--Triggering PostLogin-->
                        </div>
                    </form>
                    <div style="position:fix; margin-top:80px; text-align:right">
                        <a style="text-align:right; color:white" href="register">Doesn't Have Account?</a> <!--Redirect and requesting get method for register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>