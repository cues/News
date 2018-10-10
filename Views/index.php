<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <link rel='stylesheet' href='Views/Posts/posts.css' />
</head>
<body>



    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand" >News</div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>posts">Posts</a>
                </li>
                <?php  if(isset($_SESSION['is_logged_in'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>posts/add">Add</a>
                    </li>
                <?php endif; ?>
            </ul>
            

            <ul class="navbar-nav  navbar-right">
                <?php  if(isset($_SESSION['is_logged_in'])) : ?>
                    <li class="nav-item nav-link">
                            Welcome <?php echo $_SESSION['user_data']['name'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Log out</a>
                    </li>
                <?php  else : ?>
                    <li class="nav-item ">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
                    </li>
                    <li class="nav-item new">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/signup">Sign Up</a>
                    </li>
                <?php endif; ?>
                
            </ul>
          
        </div>
    </nav>

    <div style='margin:40px auto'>
        <?php  Messages::display() ?>
        <?php  require ($view) ?>
    </div>

</body>
</html>