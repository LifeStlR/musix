<head>
<link href="css/search.scss" rel="stylesheet" media="all">
<link href="css/home.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<div class="container" style="background: url('../images/musix.jpg');">
<div class="card-wrapper">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--Looping each of posts into individual post-->
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  by:<?php echo e($post->user->name); ?> <!--taking desired post's user and then user's name for its title and content from post to be displayed-->
  <div class="card-body">
    <h5 class="card-title"><?php echo e($post['title']); ?></h5>
    <p class="card-text"><?php echo e($post['content']); ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div><?php /**PATH D:\Coding Needs\Laravel\musix\resources\views/post/index.blade.php ENDPATH**/ ?>