<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
?>
<!DOCTYPE html>
<html lang="ru_RU">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>header</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/headerfooter.css">
        <link rel="stylesheet" href="styles/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <?php
            require_once('php/regular_functions/functions.php');
        ?>
    </head>

        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++ Формы -->
        <div style="display: none;">
            <form id="registration_form" class="windows" action="" method="POST">
                <h1>Регистрация</h1>
                <div class="inputs">
                    <div style="display: flex;">
                        <input id="lastname" type="text" name="firstname" placeholder="Фамилия">
                        <input id="name" type="text" name="name" placeholder="Имя">
                    </div>
                    <input id="additname" type="text" name="lastname" placeholder="Отчество">
                    <input id="e-mail" type="text" name="email" placeholder="e-mail">
                    <input id="phone" type="text" name="phone" placeholder="Телефон">
                    <input type="password" id="password" name="password" placeholder="Пароль">
                    <input type="password" id="password_1" name="password_repeat" placeholder="Повторите пароль">
                    <input class="submit" type="submit" value="Зарегистроваться">
                </div>
            </form>

            <form action="" method="POST" id="login" class="windows">
                <h1>Войти</h1>
                <input id="login_pole" type="text" name="login" placeholder="Логин">
                <input id="password_login" type="password" name="password" placeholder="Пароль">
                <input type="submit" class="submit" value="Войти">
                <div onclick="$.fancybox('#zabil_parol')" class="link">Забыли пароль?</div>
                <div onclick="$.fancybox('#registration_form')" class="link">Зарегистрироваться</div>
            </form>

            <?php
                if (!empty($_POST['password']) and !empty($_POST['login'])) {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    
                    $user = getLogin($login, $password);
                    
                    if (!empty($user)) {
                        $_SESSION['user'] = $user;
                        var_dump($_SESSION);
                    } else {
                        echo "Неверный логин или пароль.";
                    }
                }
            ?>

            <form action="" method="POST" id="zabil_parol" class="windows">
                <h1>Восстановление доступа</h1>
                <input id="login_pole" type="e-mail" name="email" placeholder="Введите свой e-mail">
                <input type="submit" class="submit" value="Продолжить">
                <p class="context">На почту будет отправлено письмо с ссылкой на восстановление</p>
                <div onclick="$.fancybox('#login')" class="link">Войти</div>
            </form>

            <form action="" method="POST" id="work_in_portfolio" class="windows">
                <h1>Добавить работу</h1>
                <div style="display: flex;">
                    <input id="file1" type="file" accept="image/jpeg" value="Загрузить картинку">
                    <input id="file2" type="file" accept="video/*" value="Загрузить видео">
                </div>
                <input type="text" id="name_work" placeholder="Придумайте название своей работы">
                <input type="text" id="description_work" placeholder="Краткое описание">

                <input type="submit" class="submit" value="Добавить">
            </form>

            <form action="" method="POST" id="info_o_sebe" class="windows">
                <h1>Изменение информации о себе</h1>
                <input type="text" id="city" placeholder="Ваш город" value="">
                <textarea class="textarea" name="text" id="text_desk" cols="150" rows="30" placeholder="Опишите себя..."></textarea>
                <select name="kategory" id="kategory_1">
                    <option value="1">Дизайнер</option>
                    <option value="2">Frontend-разработчик</option>
                    <option value="3">Fullstack-разработчик</option>
                    <option value="4">Backend-разработчик</option>
                    <option value="5">JavaScript-разработчик</option>
                    <option value="6">Психолог</option>
                    <option value="7">PHP-разработчик</option>
                    <option value="8">С#-разработчик</option>
                    <option value="9">Специалист 1С</option>
                    <option value="10">Python-разработчик</option>
                    <option value="11">UI/UX-дизайнер</option>
                    <option value="12">SEO-специалист</option>
                    <option value="13">Администратор баз данных</option>
                    <option value="14">Системный администратор</option>
                    <option value="15">Ведущий программист</option>
                </select>
                <input type="submit" class="submit" value="Добавить">
            </form>

            <form action="" method="POST" id="sdelat_zakaz" class="windows">
                <h1>Создание заказа</h1>
                <input type="text" id="name_zakaz" placeholder="Заголовок вашего заказа">
                <textarea class="textarea" name="desc_zakaz" id="desc_zakaz" cols="100" rows="10" placeholder="Опишите свой заказ, очень интересный функционал"></textarea>
                <input id="file3" type="file" accept="*" value="Прикрепите ФАЙЛЫ">
                <select name="kategory" id="kategory">
                    <option value="1">Дизайнер</option>
                    <option value="2">Frontend-разработчик</option>
                    <option value="3">Fullstack-разработчик</option>
                    <option value="4">Backend-разработчик</option>
                    <option value="5">JavaScript-разработчик</option>
                    <option value="6">Психолог</option>
                    <option value="7">PHP-разработчик</option>
                    <option value="8">С#-разработчик</option>
                    <option value="9">Специалист 1С</option>
                    <option value="10">Python-разработчик</option>
                    <option value="11">UI/UX-дизайнер</option>
                    <option value="12">SEO-специалист</option>
                    <option value="13">Администратор баз данных</option>
                    <option value="14">Системный администратор</option>
                    <option value="15">Ведущий программист</option>
                </select>
                <input type="text" id="price_zakaz" placeholder="Введите сумму от и до в формате A-B">
                <input type="date" id="date_zakaz" placeholder="Введите дату выполнения вашего заказа">
                <input type="submit" class="submit" value="Добавить">
            </form>
        </div>
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <body>
        <?php
            require_once('php/header.php');
        ?>
        <main>
            <div class="container intro">
                <div class="intro_block">
                    <div class="intro_block_markup">
                        <h1 onclick="$.fancybox('#info_o_sebe')">Работай с лучшими специалистами</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.</p>
                        <div class="intro_search_container">
                            <form id="form_intro">
                                <img id="icon_search" src="img/search.png" id="search">
                                <input type="text" name="text" class="intro_search" placeholder="Чем я могу вам помочь?">
                            </form>
                        </div>
                        <div class="flex">
                            <input onclick="$.fancybox('#sdelat_zakaz')" type="submit" name="#" class="button_blue" id="button_indent"value="Оставить заказ">
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


                                <p class="description_card clip">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit</p> <!-- Здесь инфа из БД -->
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Подробнее" style="margin-top: 10px;">
                            </div>
                        </div>

                        <div class="freelancer_card_search">
                            <!-- Карточка -->
                            <div id="bottom_markup">
                                <h1 class="more">Векторные изображения и UI/UX дизайн для мобильной игры</h1><!-- Здесь название из БД -->
                                <p class="description_card clip">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus, consectetur adipiscing</p> <!-- Здесь инфа из БД -->
                            </div>
                            <divs id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">100 000 - 200 000 RUB</h1> <!-- Цена из БД -->
                                <input type="submit" name="#" class="button_blue" value="Откликнуться" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмотреть" style="margin-top: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container block_about_us">
                <div class="markup_about_us_video">
                    <div class="video_block">
                        <div class="flex" style="width: 100%; justify-content: space-between;">
                            <h1>Видео</h1>
                            <img src="../img/lanse_img_video.png" alt="Заебали вы меня">
                        </div>
                        <div class="video">Говно видео</div>
                    </div>
                </div>
                <div class="markup_about_us_text">
                    <h1>О нашей компании</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.
                    </p><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc.
                    </p><br>
                    <p>
                        Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.
                    </p><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="request_header">
                    <h1 id="">Часто задаваемые вопросы:</h1>
                    <span id="line" style="background-color: #000000;"></span>
                </div>
                <div>
                    <details>
                        <summary class="questions">Как начать работать на фрилансе?</summary>
                        <p>Рекомендованная цена - К сожалению, указать заранее точную стоимость услуги невозможно. Причина в том, что исполнители YouDo конкурируют между собой с целью привлечения заказчиков, в том числе, назначают минимально возможные цены. Поэтому цена может быть на уровне среднерыночной или до 40% дешевле. Создайте задание, специалисты предложат свои условия, а вы выберете подходящий вариант.</p>
                    </details>
                    <details>
                        <summary class="questions">Сколько можно заработать на фрилансе?</summary>
                        <p>Сумма, которую вы можете заработать на фрилансе, зависит от типа работы, количества времени, которое вы готовы инвестировать, и от ваших навыки и опыта. Как правило, фрилансеры могут зарабатывать от 20 долларов в час до более чем 200 долларов в час.</p>
                    </details>
                    <details>
                        <summary class="questions">Что такое Freelance?</summary>
                        <p>Сейчас онлайн 129 фрилансеров, которые предложат свою помощь, если они свободны и их устраивают ваши условия. Для того чтобы исполнитель мог выполнить задачу наилучшим образом, как можно более подробно опишите ее - от этого зависит правильное понимание и, соответственно, выполнение.</p>
                    </details>
                    <details>
                        <summary class="questions">Кто такие фрилансеры?</summary>
                        <p>Обычно предложения от исполнителей начинают поступать через 5-10 минут, но в некоторых случаях это может занять больше времени. Срок ожидания зависит от многих особенностей заказа - загруженности исполнителей, сложности задания, времени суток и т.д.</p>
                    </details>
                    <details>
                        <summary class="questions">Что такое биржа фриланса?</summary>
                        <p>Сумма, которую вы можете заработать на фрилансе, зависит от типа работы, количества времени, которое вы готовы инвестировать, и от ваших навыки и опыта. Как правило, фрилансеры могут зарабатывать от 20 долларов в час до более чем 200 долларов в час.</p>
                    </details>
                </div>
            </div>
        </main>

        <?php
            require_once('php/footer.php');
        ?>

        
	    <script src="/scripts/script.js"></script>
	</body>
</html>
