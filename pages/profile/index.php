<!DOCTYPE html>
<html lang="ru_RU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="../../styles/headerfooter.css">
  <?php require_once('../../functions.php') ?>
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
            <h1 id="name">
              <?php
                $arr = getUserInfo(1);
                echo "$arr[lastname] $arr[firstname] $arr[surname]";
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
            <a id="place" class="flex" href="#">
              <img src="img/map-tag.png" class="icon">
              <div>
                <?php
                  $arr = getUserInfo(1);
                  echo "$arr[address]";
                ?>
              </div>
            </a>
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
    <div style="height:100vh;"></div>
  </main>
  <?php
    require_once('../../footer.php');
  ?>
</body>
</html>