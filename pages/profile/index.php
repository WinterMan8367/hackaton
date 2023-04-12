<!DOCTYPE html>
<html lang="ru_RU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="../../styles/headerfooter.css">
  <link rel="stylesheet" href="../../styles/style.css">
  <?php require_once('../../php/regular_functions/functions.php') ?>
</head>
<body>
  <?php require_once('../../php/header.php') ?>
  <main id="main">
    <section id="module_1">
      <div class="container">
        <div class="inner flex">
          <div class="left">
            <div>
              <img class="profile_avatar" src="#">
              <button  class="button" href="#">Редактировать профиль</button>
            </div>
          </div>
          <div class="right">
            <h1 id="name">
              <?php
                $arr = getUserInfo(1);
                echo "$arr[lastname] $arr[firstname] $arr[surname]";
                $city = $arr['city'];
              ?>
            </h1>
            <div class="reyting_name">
              <?php
                $arr = getFreelancerRating(1);
                for ($i = 0; $i < round($arr[0]["generalRating"]); $i++)
                {
                  echo "<img src='img/star.png'>";
                }
              ?>
            </div>
            <a id="place" class="flex" href="https://www.google.com/maps/place/<?php echo "$city"?>">
              <img src="img/map-tag.png" class="icon">
              <div>
                <?php
                  $arr = getUserInfo(1);
                  echo "$arr[city]";
                ?>
              </div>
            </a>
            <div class="tags flex">
              <?php
                $arr = getUserCategories(1);
                foreach ($arr as $elem)
                {
                  echo "<p class='tag' style='color: #FF6060; background: #FFD3BA;'>#";
                  echo $elem["categoryName"];
                  echo "</p>";
                }
              ?>
            </div>
            <p class="description">
            <?php
                  $arr = getUserInfo(1);
                  echo "$arr[aboutUser]";
                ?>
            </p>
            <div class="bottom flex">
              <div class="status">Онлайн<!--Онлайн/Офлайн--></div>
              <a class="go_to" href="#">В профиль заказчика</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="module_2">
      <div class="container">
        <div class="inner">
          <h2 class="heading">Портфолио</h2>
          <div class="wrapper">
            <div class="toper">
              <div class="flex">
                <img src="img/download.png">
                <a href="#">Добавить</a> <!--Типа добавить элемент портфолио, макет его свёрстан, только файлы добавить)-->
              </div>
            </div>
            <div class="content">
              <div class="portfolio_item">
                <img src="#" alt="">
                <h3>Сайт кондитерской</h3>
                <p class="description">Нахуй я тут есть АААААА!</p>
                <div class="tools flex">
                  <img src="img/settings.png" alt="" class="left">
                  <img src="img/trash.png" alt="" class="right">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="height:100vh;"></div>
  </main>
  <?php
    require_once('../../php/footer.php');
  ?>
</body>
</html>