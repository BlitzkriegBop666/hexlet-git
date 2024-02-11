<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YBR</title>
    <link href="bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous"
    />
    <script src="bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </script>
    <style>
         .rouded-img{
            width: 60%;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(26, 9, 9, 0.5);
            padding: 0.3em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container">
          <a class="navbar-brand" p-0 href="/">
            <img src="/img/YBR.png" alt="log" width="60"/>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rugs.html">My Rugs</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <img class="rouded-img" src="/img/photo_2023-11-11_23-51-32.jpg" alt="Me" />
                <h1 class="fw-light"> Aleksandr Kolyasnikov</h1>
                <p class="lead text-muted">Yore Bizzare Rug Maker</p>
                <a
                 href="https://instagram.com/blitzkriegbop666?igshid=YzU1NGVlODEzOA==" 
                 target="_blank" 
                 class="btn btn-primary">subscribe
                </a>
                <a
                 href="https://www.youtube.com/watch?v=hQYhdHjP-gM" 
                 target="_blank" 
                 class="btn btn-secondary">for fun
                </a>
            </div>
        </div>
    </div>
<?php
session_start();

// Проверяем, установлена ли переменная счетчика в сессии
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}

// Обработка нажатия кнопки обнуления счетчика
if (isset($_GET['reset']) && $_GET['reset'] == 1) {
    $_SESSION['page_views'] = 0;
    session_regenerate_id(true);
    header("Location: /"); // Перенаправление на страницу без параметра reset
    
}

?>
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <!-- Ваш контент страницы -->

                <!-- Вывод счетчика обновлений страницы -->
                <p>Количество обновлений страницы: <?php echo $_SESSION['page_views']; ?></p>
                
                <!-- Кнопка для обнуления счетчика -->
                <a href="?reset=1" class="btn btn-danger">Обнулить счетчик</a>
            </div>
  </script>
  


</body>
</html>