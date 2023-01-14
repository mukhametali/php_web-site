<?php  session_start();
include "../../path.php";
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
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://www.fonts.com/">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php
include("../../app/include/header-admin.php");
?>

<div class="container">
    <div class="row">
        <div class="sidebar col-3">
            <ul>
                <li>
                    <a href="">Записи</a>
                </li>
                <li>
                    <a href="">Пользователи</a>
                </li>
                <li>
                    <a href="">Категории</a>
                </li>
            </ul>
        </div>


        <div class="posts col-9">
            <div class="button row">
                <a href="create.html" class="col-3 btn btn-success">Создать категорию</a>
                <span class="col-1"></span>
                <a href="index.html" class="col-3 btn btn-warning">Управлять категориями</a>
            </div>
            <div class="row title-table">
                <h2>Создать категорию</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Имя категории" aria-label="Имя категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea class="form-control" id="content" rows="3"></textarea>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать категорию</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer start -->
<?php
include("../../app/include/footer.php");
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
