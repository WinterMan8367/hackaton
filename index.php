<!DOCTYPE html>
<html lang="ru_RU">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>header</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/headerfooter.css">
        <link rel="stylesheet" href="pages/profile/styles/style.css">
        <?php
            require_once('php/regular_functions/functions.php');
        ?>
    </head>
    <body>
        <?php
            require_once('php/header.php');
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

            <!-- Категории для поиска -->
            <div class="container category_block">
                <?php
                    $arr = getCategories();
                    for ($i = 0; $i < 15; $i++)
                    {
                        echo "<button class='tag_category'>";
                        echo $arr[$i]["Name"];
                        echo "</button>";
                    }
                ?>
            </div>

            <!-- Блок списка фрилансеров -->
            <div class="container">
                <div class="block_list_of_freelancers">
                    <div class="list_freelancers_menu">
                        <div class="flex" style="align-items: center;">
                            <p id="right_indent_search_by">Искать по:</p>
                            <form id="search_markup_freelance">
                                <img id="icon_search" src="img/search.png">
                                <input type="text" name="" class="search_for_freelancers" placeholder="Теги, фрилансеры, работа">
                            </form>
                        </div>

                        <div div class="flex" style="align-items: center;">
                            <p id="right_indent_search_by">Сортировка по:</p>
                            <select class="sort_by_rating">
                                <option>Рейтингу</option>
                                <option>По убыванию</option>
                                <option>По возрастанию</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Линия -->
                    <span id="line"></span>

                    <div class="list_freelancers_scrolling">
                        <div class="freelancer_card_search">
                            <div id="bottom_markup_photo">
                                <div class="photo_freelancers">
                                    <img src="../img/user_photo.png" >
                                </div>
                                <div class="reyting_name">
                                    <?php
                                        $arr = getFreelancerRating(1);
                                        for ($i = 0; $i < round($arr[0]["generalRating"]); $i++)
                                        {
                                        echo "<img src='pages\profile\img\star.png' style='width: 24px; margin: 1px'>";
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Карточка -->
                            <div id="bottom_markup">
                                <h1 class="more">Коваленко Михаил Алексеевич</h1><!-- Здесь ФИО из БД -->
                                <p class="tag_list" style="color: #FF6060; background: #FFD3BA;">#Дизайнер</p> <!-- Здесь Тег из БД -->

                                <a class="city_list_freelancers">г. Москва</a>


                                <p class="description_card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit...</p> <!-- Здесь инфа из БД -->
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмтреть" style="margin-top: 10px;">
                            </div>
                        </div>

                        <div class="freelancer_card_search">
                            <div id="bottom_markup_photo">
                                <div class="photo_freelancers">
                                    <img src="../img/user_photo.png" >
                                </div>
                                <div class="reyting_name">
                                    <?php
                                        $arr = getFreelancerRating(1);
                                        for ($i = 0; $i < round($arr[0]["generalRating"]); $i++)
                                        {
                                        echo "<img src='pages\profile\img\star.png' style='width: 24px; margin: 1px'>";
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Карточка -->
                            <div id="bottom_markup">
                                <h1 class="more">Коваленко Михаил Алексеевич</h1><!-- Здесь ФИО из БД -->
                                <p class="tag_list" style="color: #FF6060; background: #FFD3BA;">#Дизайнер</p> <!-- Здесь Тег из БД -->

                                <a class="city_list_freelancers">г. Москва</a>


                                <p class="description_card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit...</p> <!-- Здесь инфа из БД -->
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмтреть" style="margin-top: 10px;">
                            </div>
                        </div>

                        <div class="freelancer_card_search">
                            <div id="bottom_markup_photo">
                                <div class="photo_freelancers">
                                    <img src="../img/user_photo.png" >
                                </div>
                                <div class="reyting_name">
                                    <?php
                                        $arr = getFreelancerRating(1);
                                        for ($i = 0; $i < round($arr[0]["generalRating"]); $i++)
                                        {
                                        echo "<img src='pages\profile\img\star.png' style='width: 24px; margin: 1px'>";
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Карточка -->
                            <div id="bottom_markup">
                                <h1 class="more">Коваленко Михаил Алексеевич</h1><!-- Здесь ФИО из БД -->
                                <p class="tag_list" style="color: #FF6060; background: #FFD3BA;">#Дизайнер</p> <!-- Здесь Тег из БД -->

                                <a class="city_list_freelancers">г. Москва</a>


                                <p class="description_card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit...</p> <!-- Здесь инфа из БД -->
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмтреть" style="margin-top: 10px;">
                            </div>
                        </div>

                        <div class="freelancer_card_search">
                            <div id="bottom_markup_photo">
                                <div class="photo_freelancers">
                                    <img src="../img/user_photo.png" >
                                </div>
                                <div class="reyting_name">
                                    <?php
                                        $arr = getFreelancerRating(1);
                                        for ($i = 0; $i < round($arr[0]["generalRating"]); $i++)
                                        {
                                        echo "<img src='pages\profile\img\star.png' style='width: 24px; margin: 1px'>";
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Карточка -->
                            <div id="bottom_markup">
                                <h1 class="more">Коваленко Михаил Алексеевич</h1><!-- Здесь ФИО из БД -->
                                <p class="tag_list" style="color: #FF6060; background: #FFD3BA;">#Дизайнер</p> <!-- Здесь Тег из БД -->

                                <a class="city_list_freelancers">г. Москва</a>


                                <p class="description_card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit...</p> <!-- Здесь инфа из БД -->
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмтреть" style="margin-top: 10px;">
                            </div>
                        </div>

                        <div class="freelancer_card_search">
                            <div id="bottom_markup_photo">
                                <div class="photo_freelancers">
                                    <img src="../img/user_photo.png" >
                                </div>
                                <div class="reyting_name">
                                    <?php
                                        $arr = getFreelancerRating(1);
                                        for ($i = 0; $i < round($arr[0]["generalRating"]); $i++)
                                        {
                                        echo "<img src='pages\profile\img\star.png' style='width: 24px; margin: 1px'>";
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Карточка -->
                            <div id="bottom_markup">
                                <h1 class="more">Коваленко Михаил Алексеевич</h1><!-- Здесь ФИО из БД -->
                                <p class="tag_list" style="color: #FF6060; background: #FFD3BA;">#Дизайнер</p> <!-- Здесь Тег из БД -->

                                <a class="city_list_freelancers">г. Москва</a>


                                <p class="description_card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit...</p> <!-- Здесь инфа из БД -->
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмтреть" style="margin-top: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div style="height: 100vh;"></div>

        <?php
            require_once('php/footer.php');
        ?>
	    <script src="scripts/script.css"></script>
	</body>
</html>
