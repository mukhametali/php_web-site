<?php
      include "path.php";
      include "app/controllers/topics.php";
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome   -->
    <script src="https://kit.fontawesome.com/e1e963a8a6.js" crossorigin="anonymous"></script>

    <!-- Custom Styling   -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://www.fonts.com/">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php
include("app/include/header.php");
?>


<!-- Блок карусели начало -->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ посты</h2>
    </div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="1 carousel-item active">
            <img src="assets/images/image-1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="">First slide label</a></h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/image-2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="">Second slide label</a></h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/image-3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="">Third slide label</a></h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- Блок карусели конец -->

<!-- Блок main начало -->
<div class="container">
    <div class="content row">
        <!-- Main content   -->
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>


            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image-small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#"> Прикольная статья на тему динамического сайта</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Jun 5, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aspernatur assumenda cumque et excepturi fugiat voluptatum.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image-small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#"> Прикольная статья на тему динамического сайта</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Jun 5, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aspernatur assumenda cumque et excepturi fugiat voluptatum.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image-small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#"> Прикольная статья на тему динамического сайта</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Jun 5, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aspernatur assumenda cumque et excepturi fugiat voluptatum.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image-small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#"> Прикольная статья на тему динамического сайта</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Jun 5, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aspernatur assumenda cumque et excepturi fugiat voluptatum.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image-small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#"> Прикольная статья на тему динамического сайта</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Jun 5, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aspernatur assumenda cumque et excepturi fugiat voluptatum.
                    </p>
                </div>
            </div>

        </div>


        <!-- Sidebar Content -->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск материалов</h3>
                <form>
                    <input type="text" name="search-term" class="text-input" placeholder="Найти в ...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                    <li>
                        <a href="#"><?=$topic['name'];?></a>
                    </li>
                    <?php endforeach;?>
                </ul>

            </div>

        </div>
    </div>
</div>
<!-- Блок main конец -->
<!-- Footer start -->
<?php
include("app/include/footer.php");
?>
<!-- Footer end-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>