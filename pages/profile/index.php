<!DOCTYPE html>
<html lang="ru_RU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <main id="main">
    <section id="module_1">
      <div class="container">
        <div class="inner flex">
          <div class="left">
            <img class="profile_avatar" src="#">
            <button  class="button" href="#">Редактировать профиль</button>
          </div>
          <div class="right">
            <h1 id="name">Эдуард Антон Васильевич<!--Имя чела с БД--></h1>
            <div class="reyting_name">
              <img src="img/star.png"> <!--Звёздочки копируются в зависимости от рейтинга в БД-->
            </div>
            <a class="block flex" href="#"><img src="img/map-tag.png" class="icon">ававыаыв<!--Название города--></a>
            <p class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed.  Laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. 
            </p>
            <div class="bottom">
              <div class="status">Онлайн<!--Онлайн/Офлайн--></div>
              <a class="go_to" href="#">В профиль заказчика</a>
            </div>


          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
            require_once('header.php');
  ?>
</body>
</html>