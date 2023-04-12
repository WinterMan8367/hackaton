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
            <div class="content flex">
              <!-- Хуйня, которая элемент порфтолио, макет -->
              <div class="portfolio_item">
                <img class="card1" src="#" alt="">
                <a href=""><h3 id="head_lol">Сайт кондитерской</h3></a> <!--тоже по БД прогнать-->
                <p class="description">Нахуй я тут есть ААА!!! PRess FFF</p> <!--Описание, а тут и так всё ясно, если нет, то 50R мне на кату и я расскажу ))))) Шутка от мишутки-->
                <div class="tools flex">
                  <a class="block" href=""><img src="img/settings.png" alt="" class="left"></a>
                  <a class="block" href=""><img src="img/trash.png" alt="" class="right"></a>
                </div>
              </div>
              <!-- Конец хуйни -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="module_3">
      <div class="container">
        <div class="inner">
        <h2 class="heading">Ваши отклики</h2>
          <div class="wrapper">
            <div class="toper">
              <div class="flex">
                <img src="img/suitcase.png">
                <a href="#">Найти заказы</a> <!--Типа добавить элемент портфолио, макет его свёрстан, только файлы добавить)-->
              </div>
            </div>
            <div class="content flex">
              <!-- Начало карточки-->
              <div class="card flex">
                <div class="left flex">
                  <h3 class="suka_bliad">Убить Зеленского во благо РОССИИИИИИИИИИИ!!!!!!!</h3>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed.  Laoreet odio dignissim sed. Donec ut vestibulum nisiorbi tincidunt dui diam, at sollicitudin mi consequat at. . Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed...</p>
                </div>
                <div class="right flex">
                  <h3 class="price">
                    100000 - 150000 Руб
                  </h3>
                  <button class="block button one">Посмотреть</button>
                  <button class="block button two">Отказаться</button>
                </div>
              </div>
              <!-- Конец -->
            </div>
        </div>
      </div>
    </section>

    <section id="module_4">
      <div class="container">
        <div class="inner">
        <h2 class="heading">Ваши заказы</h2>
          <div class="wrapper">
            <div class="toper">
              <div class="flex">
                <img src="img/download.png">
                <a href="#">Добавить</a> <!--Типа добавить элемент портфолио, макет его свёрстан, только файлы добавить)-->
              </div>
            </div>
            <div class="content flex">
              <!-- Начало карточки-->
              <div class="card flex">
                <div class="left flex">
                  <h3 class="suka_bliad">Убить Зеленского во благо РОССИИИИИИИИИИИ!!!!!!!</h3>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed.  Laoreet odio dignissim sed. Donec ut vestibulum nisiorbi tincidunt dui diam, at sollicitudin mi consequat at. . Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed...</p>
                </div>
                <div class="right flex">
                  <h3 class="price">
                    100000 - 150000 Руб
                  </h3>
                  <button class="block button one">Посмотреть</button>
                  <button class="block button two">Изменить</button>
                </div>
              </div>
              <!-- Конец -->
            </div>
        </div>
      </div>
    </section>

    <section id="module_5">
      <div class="container">
        <div class="inner">
        <h2 class="heading">Заказы пользователя</h2>
          <div class="wrapper">
            <div class="toper">
              <div class="flex">
 <!--Типа добавить элемент портфолио, макет его свёрстан, только файлы добавить)-->
              </div>
            </div>
            <div class="content flex">
              <!-- Начало карточки-->
              <div class="card flex">
                <div class="left flex">
                  <h3 class="suka_bliad">Убить Зеленского во благо РОССИИИИИИИИИИИ!!!!!!!</h3>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed.  Laoreet odio dignissim sed. Donec ut vestibulum nisiorbi tincidunt dui diam, at sollicitudin mi consequat at. . Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed...</p>
                </div>
                <div class="right flex">
                  <h3 class="price">
                    100000 - 150000 Руб
                  </h3>
                  <button class="block button one">Посмотреть</button>
                  <button class="block button two">Откликнуться</button>
                </div>
              </div>
              <!-- Конец -->
            </div>
        </div>
      </div>
    </section>

  </main>
  <script src="scripts/scripts.js"></script>
  <?php
    require_once('../../php/footer.php');
  ?>
</body>
</html>