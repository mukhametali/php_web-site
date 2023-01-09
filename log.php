<?php include("path.php"); ?>

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

<!-- FORM -->
<div class="container reg_form">

    <form class="row justify-content-md-center" method="post" action="log.php">
        <h2 class="col-12">Авторизация</h2>

        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
        </div>

        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-secondary">Войти</button>
            <a href="aut.html">Зарегистрироваться</a>

        </div>

    </form>
</div>



<!-- END FORM -->

<!-- Footer start -->
<?php
include("app/include/footer.php");
?>
<!-- Footer end-->