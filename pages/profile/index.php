<!DOCTYPE html>
<html lang="ru_RU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="../../styles/headerfooter.css">
  <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
  <?php require_once('../../header.php') ?>
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
            <h1 id="name">Эдуард Антон Васильевич<!--Имя чела с БД--></h1>
            <div class="reyting_name">
              <img src="img/star.png"> <!--Звёздочки копируются в зависимости от рейтинга в БД-->
            </div>
            <a id="place" class="flex" href="#">
              <img src="img/map-tag.png" class="icon">
              <div>ававыаыв</div><!--Название города-->
            </a>
            <div class="tags flex">
              <p class="tag" style=" color: #FF6060; background: #FFD3BA;">#Дизайнер</p> <!--Теги с БД Цвет выбирай сам) Можно в бд занести-->
            </div>
            <p class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed.  Laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. 
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
    require_once('../../footer.php');
  ?>
</body>
</html>