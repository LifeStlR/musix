<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="s01">
    <form method="POST" action="search"> <!--Will be triggering post request named search in AuthController-->
						<!--csrf below is a feature of laravel to protect the web from csrf attacks-->
        <?php echo e(csrf_field()); ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MusiKUY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('post')); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
        <fieldset style="padding-bottom:10rem;">
          <legend style="margin:auto;">Discover New Friend</legend>
          <a href="profile">
          <i class="fa fa-user fa-3x" style="margin-left:6rem; padding-top:2rem;" aria-hidden="true"></i>
          </a>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" name="search" placeholder="Search..." />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button> <!--Trigger search function-->
          </div>
        </div>
        <div>
      </form>
      <a href="logout" style="color:white;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#">
      <i class="fa fa-user fa-3x" style="margin-left:6rem; padding-top:2rem;" aria-hidden="true"></i>
    </a>
        <form id="logout-form" action="logout" method="POST" style="display: none;"> <!--Trigger post method named logout in AuthController-->
            <?php echo csrf_field(); ?>
        </form>
  </body>
</html><?php /**PATH D:\Coding Needs\Laravel\musix\resources\views/welcome.blade.php ENDPATH**/ ?>