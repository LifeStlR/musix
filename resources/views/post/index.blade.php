<head>
<link href="css/search.scss" rel="stylesheet" media="all">
<link href="css/home.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<div class="container" style="background: url('../images/musix.jpg');">
<div class="card-wrapper">
@foreach($posts as $post) <!--Looping each of posts into individual post-->
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  by:{{$post->user->name}} <!--taking desired post's user and then user's name for its title and content from post to be displayed-->
  <div class="card-body">
    <h5 class="card-title">{{$post['title']}}</h5>
    <p class="card-text">{{$post['content']}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
</div>
</div>