<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">
            <img src="assets/img/palogo.svg" alt="logo" style="height: 50px">
        </a>
        <ul class="navbar-nav ml-auto">
<!--            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Word Count</a></li>-->
            <li class="nav-item"><a href="action.php?pages=all-pages" class="nav-link">All News</a></li>

            <?php foreach ($categories as $category) { ?>

                <li class="nav-item"><a href="action.php?pages=category-news&&categoryid=<?php echo $category['id']?>" class="nav-link"><?php echo $category['name']?></a></li>

            <?php } ?>

        </ul>
    </div>
</nav>