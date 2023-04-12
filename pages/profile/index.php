<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
              <button  class="button one" href="#">Написать сообщение</button>
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
                <?php
                  $arr = getPortfolio(1);
                  foreach ($arr as $key => $value)
                  {
                    echo "<div class='portfolio_item'>";
                    foreach ($value['files'] as $k => $v)
                    {
                      echo "<img class='card1' src='", $v['filepath'], $v['filename'], $v['extension'], "' alt=''>";
                    }    
                    echo "<a href=''><h3 id='head_lol'>";
                    echo $value['title'];
                    echo "</h3></a>";
                    echo "<p class='description'>";
                    echo $value['description'];
                    echo "</p>";
                    echo "
                      <div class='tools flex'>
                        <a class='block' href=''><img src='img/settings.png' alt='' class='left'></a>
                        <a class='block' href=''><img src='img/trash.png' alt='' class='right'></a>
                      </div>
                    </div>
                    ";
                  }
                ?>
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
              <?php
                $arr = getOrderInfoForFreelancer(1);
                foreach ($arr as $key => $value)
                {
                  foreach ($value['orders'] as $k => $v)
                  {
                    echo "<div class='card flex'>
                    <div class='left flex'>";
                    echo "<h3 class='suka_bliad'>", $v['title'], "</h3>";
                    echo "<p class='description'>", $v['description'], "</p>";
                    echo "</div>
                    <div class='right flex'>";
                    echo "<h3 class='price'>", $v['priceFrom'], "₽ - ", $v['priceBefore'], "₽</h3>";
                    echo "<button class='block button one'>Посмотреть</button>
                    <button class='block button two'>Отказаться</button>
                    </div>
                    </div>";
                  }
                }
              ?>
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
              <!-- <div class="card flex">
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
              </div> -->
              <?php
                $arr = getOrderInfo(1);
                foreach ($arr as $elem)
                {
                  echo "<div class='card flex'>
                  <div class='left flex'>";
                  echo "<h3 class='suka_bliad'>", $elem['title'], "</h3>";
                  echo "<p class='description'>", $elem['description'], "</p>";
                  echo "</div>
                  <div class='right flex'>";
                  echo "<h3 class='price'>", $elem['priceFrom'], "₽ - ", $elem['priceBefore'], "₽</h3>";
                  echo "<button class='block button one'>Посмотреть</button>
                  <button class='block button two'>Отказаться</button>
                  </div>
                  </div>";
                }
              ?>
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
              <?php
                $arr = getOrderInfo(1);
                foreach ($arr as $elem)
                {
                  echo "<div class='card flex'>
                  <div class='left flex'>";
                  echo "<h3 class='suka_bliad'>", $elem['title'], "</h3>";
                  echo "<p class='description'>", $elem['description'], "</p>";
                  echo "</div>
                  <div class='right flex'>";
                  echo "<h3 class='price'>", $elem['priceFrom'], "₽ - ", $elem['priceBefore'], "₽</h3>";
                  echo "<button class='block button one'>Посмотреть</button>
                  <button class='block button two'>Отказаться</button>
                  </div>
                  </div>";
                }
              ?>
              <!-- Конец -->
            </div>
        </div>
      </div>
    </section>

    <section id="module_6">
      <div class="container">
        <div class="inner">
          <h2 class="heading">
            Отзывы
          </h2>
          <div class="content">
            <!-- Start -->
            <div class="comm flex">
                <div class="left">
                  <div class="avatar_user" style="background: center/cover url('')">
                  </div>
                  <div class="status" style="background: #A2CF42">Доволен</div>
                </div>
                <div class="right flex">
                  <div class="top flex">
                    <div class="left">
                      <h3 class="suka_bliad">Иванов Иван Иванович</h3>
                    </div>
                    <div class="right">
                      <div class="reyting flex">
                        <img src='img/star.png'>
                        <img src='img/starempty.png'>
                        <img src='img/starempty.png'>
                        <img src='img/starempty.png'>
                        <img src='img/starempty.png'>
                      </div>
                    </div>
                  </div>
                  <div class="bottom">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius. Dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum...</p>
                  </div>
                </div>
            </div>
            <!-- End -->
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