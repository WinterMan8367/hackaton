<!DOCTYPE html>
<html lang="ru_RU">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>header</title>
		<link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/headerfooter.css">
    </head>
    <body>
        <?php
            require_once('header.php');
        ?>
        <main>
            <div class="container intro">
                <div class="intro_block">
                    <div class="intro_block_markup">
                        <h1>Работай с лучшими специалистами</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.</p>
                        <div class="intro_search_container">
                            <form id="form_intro">
                                <img id="icon_search" src="img/search.png" id="search">
                                <input type="text" name="text" class="intro_search" placeholder="Чем я могу вам помочь?">
                            </form>
                        </div>
                        <div class="flex">
                            <input type="submit" name="#" class="button_blue" id="button_indent"value="Оставить заказ">
                            <input type="submit" name="#" class="button_white" value="Найти заказ">
                        </div>
                    </div>
                    <div class="intro_block_markup block">
                        <img class="intro_image" width="500px" height="500px" src="../img/man.png">
                    </div>
                </div>
            </div>


            <!-- Сценарный блок -->
            <div class="container stage">
                <div class="flex">
                    <!-- Первый блок -->
                    <div class="stage_block">
                        <img width="80px" height="69px" src="../img/stage_one_img.png">
                        <div id="markup_stage">
                            <div class="flex">
                                <img src="../img/stage_one.png">
                                <h1 id="stage_h1_color">Заказчик</h1>
                            </div>
                            <p>Предложите заказ</p>
                        </div>
                    </div>
                    <!-- Стрелка -->
                    <div class="arrow"><img src="../img/arrow-right.png"></div>

                    <!-- Второй блок -->
                    <div class="stage_block">
                        <img width="80px" height="64px" src="../img/stage_two_img.png">
                        <div id="markup_stage">
                            <div class="flex">
                                <img src="../img/stage_two.png">
                                <h1 id="stage_h1_color">Специалист</h1>
                            </div>
                            <p>Предлагайте свои услуги</p>
                        </div>
                    </div>
                    <!-- Стрелка -->
                    <div class="arrow"><img src="../img/arrow-right.png"></div>

                    <!-- Третий блок -->
                    <div class="stage_block">
                        <img width="80px" height="69px" src="../img/stage_three_img.png">
                        <div id="markup_stage">
                            <div class="flex">
                                <img src="../img/stage_three.png">
                                <h1 id="stage_h1_color">Договор</h1>
                            </div>
                            <p>Договаривайтесь с исполнителем</p>
                        </div>
                    </div>
                    <!-- Стрелка -->
                    <div class="arrow"><img src="../img/arrow-right.png"></div>

                    <!-- Четвёртый блок -->
                    <div class="stage_block">
                        <img width="80px" height="69px" src="../img/stage_four_img.png">
                        <div id="markup_stage">
                            <div class="flex">
                                <img src="../img/stage_four.png">
                                <h1 id="stage_h1_color">Готово!</h1>
                            </div>
                            <p>Получите готовую работу</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Блок -->
        </main>
        <div style="height: 100vh;"></div>

        <?php
            require_once('footer.php');
        ?>
	    <script src="scripts/script.css"></script>
	</body>
</html>
