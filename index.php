<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    if (!empty($_GET['logout']))
    {
        session_destroy();
        header("Location: http://localhost/index.php");
    }
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
        <?php
            if (!empty($_POST['password']) and !empty($_POST['login'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                    
                $user = getLogin($login, $password);
                if (!empty($user))
                {
                    $_SESSION['user'] = $user;
                }
            }
        ?>
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
            if (empty($user) and !empty($_POST['password']) and !empty($_POST['login']))
            {
                echo "<div style='height: 30px; font-size: 16px; background-color: #FF6971; color: white; border: 1px solid #FF6971; border-radius: 5px; margin: 10px 10px 0 10px; padding-left: 10px'>Неверный логин или пароль.</div>";
            }
        ?>
        <main>
            <div class="container intro">
                <div class="intro_block">
                    <div class="intro_block_markup">
                        <h1 onclick="$.fancybox('#info_o_sebe')">Работай с лучшими специалистами</h1>
                        <p>Вы хотите работать с лучшими людьми? Сайт Lanse может предоставить вам такую ​​возможность. Независимо от того, являетесь ли вы фрилансером, ищущим нового клиента, или бизнесом, который ищет лучших специалистов, этот сайт поможет вам найти идеальных людей для вашего проекта.</p>
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
                                <h1 class="more">Коваленко Михаил Алексеевич</h1>
                                <p class="tag_list" style="color: #FF6060; background: #FFD3BA;">#Дизайнер</p>

                                <a class="city_list_freelancers">г. Москва</a>


                                <p class="description_card clip">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">10 000 - 40 000 RUB</h1>
                                <input type="submit" name="#" class="button_blue" value="Оставить заказ" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Подробнее" style="margin-top: 10px;">
                            </div>
                        </div>

                        <!-- <div class="freelancer_card_search"> -->
                            <!-- Карточка -->
                            <!-- <div id="bottom_markup">
                                <h1 class="more">Векторные изображения и UI/UX дизайн для мобильной игры</h1>
                                <p class="description_card clip">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus variusLorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus, consectetur adipiscing</p>
                            </div>
                            <div id="bottom_markup_outo" style="min-width: 300px;">
                                <h1 class="morg">100 000 - 200 000 RUB</h1>
                                <input type="submit" name="#" class="button_blue" value="Откликнуться" style="margin-top: 20px;">
                                <input type="submit" name="#" class="button_white" value="Посмотреть" style="margin-top: 10px;">
                            </div> -->
                            <?php
                                $arr = getOrder();
                                foreach ($arr as $elem)
                                {
                                    echo "<div class='freelancer_card_search'>";
                                    echo "<div id='bottom_markup'>";
                                    echo "<h1 class='more'>", $elem['title'], "</h1>";
                                    // $order = getOrderCategories($elem['id']);
                                    // foreach ($order as $order_elem)
                                    // {
                                    //     echo "<p class='tag_list' style='color: #FF6060; background: #FFD3BA;'>";
                                    //     echo $order_elem['categoryName'];
                                    //     echo "</p>";
                                    // }
                                    echo "<p class='description_card clip'>", $elem['description'], "</p></div>";
                                    echo "<div id='bottom_markup_outo' style='min-width: 300px;'>";
                                    echo "<h1 class='morg'>", $elem['priceFrom'], "₽ - ", $elem['priceBefore'], "₽</h1>";
                                    echo "<input type='submit' name='#' class='button_blue' value='Откликнуться' style='margin-top: 20px;'>
                                    <input type='submit' name='#' class='button_white' value='Посмотреть' style='margin-top: 10px;'>
                                </div></div>";
                                }
                            ?>
                        <!-- </div> -->
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
                        Мы компания, которая специализируется на создании и предоставлении внештатных услуг для бизнеса и частных лиц. 
                    </p><br>

                    <p>
                        Наш сайт для фрилансеров предлагает широкий спектр услуг и инструментов, которые помогут вам начать работу и добиться успеха как в качестве фрилансера, так и в качестве заказчика.
                    </p><br>

                    <p>
                        Мы предлагаем различные ресурсы, которые помогут вам найти работу, связаться с клиентами и управлять своими финансами. Независимо от того, ищете ли вы разовый проект или смену карьеры на полный рабочий день, наш сайт может помочь вам найти подходящую возможность.
                        
                    </p><br>

                    <p>
                        Компания Lanse была основана в апреле 2023 года командой разработчиков-энтузиастов. Благодаря единому событию под названием Хакатон, сайт компании Lanse увидел свет спустя три дня после начала события.
                    </p><br>

                    <p>
                        Наша команда экспертов увлечена тем, что мы делаем, и стремится предоставлять услуги самого высокого качества. Мы используем новейшие технологии, чтобы помочь нашим клиентам более эффективно управлять своими рабочими процессами, а наша команда специалистов всегда готова ответить на любые ваши вопросы.
                    </p>
                </div>
            </div>
            
            <!-- Часто задаваемые вопросы -->
            <div class="container">
                <div class="request_header">
                    <h1 id="">Часто задаваемые вопросы:</h1>
                    <span id="line" style="background-color: #000000;"></span>
                </div>
                <div>
                    <!-- Что такое биржа фриланса? -->
                    <details>
                        <summary class="questions">Что такое биржа фриланса?</summary>
                        <p>Биржа фриланса - это рынок, на котором фрилансеры могут найти клиентов, а клиенты могут найти фрилансеров для завершения проектов.</p>
                        <br>
                        <p> Фриланс позволяет людям предлагать свои навыки и услуги другим в обмен на денежную валюту. Эта система полезна, когда существует необходимость в конкретных навыках или услугах, но у человека, которому они нуждаются, нет времени или ресурсов, чтобы найти и заниматься ими самостоятельно.</p>
                    </details>
                    
                    <!-- Кто такие фрилансеры? -->
                    <details>
                        <summary class="questions">Кто такие фрилансеры?</summary>
                        <p>Фрилансеры являются высококвалифицированными и опытными специалистами, которые могут быть наняты для краткосрочных проектов или долгосрочных обязательств.
                        </p>
                        <p>Фрилансеры - это самозанятые лица, которые работают чтобы предоставить клиентам творческие, специализированные или технические услуги.</p> 
                        <p>Примеры услуг, обычно предоставляемые фрилансерами, включают написание, веб -дизайн, программирование, графический дизайн, виртуальную помощь, копирайтинг и исследования.</p>
                    </details>
                    
                    <!-- Сколько можно заработать на фрилансе? -->
                    <details>
                        <summary class="questions">Сколько можно заработать на фрилансе?</summary>
                        <p>Сумма, которую вы можете заработать на фрилансе, зависит от типа работы, количества времени, которое вы готовы инвестировать, от ваших навыков и опыта. Как правило, сумма, которую заработает фрилансер, определяется по их почасовой ставке или плате за проект.Фрилансеры могут зарабатывать от 20 долларов в час до более чем 200 долларов в час.
                        </p>
                    </details>

                    <!-- Как начать работать на фрилансе? -->
                    <details>
                        <summary class="questions">Как начать работать на фрилансе?</summary>
                        <p>1. Решите, какой тип работы вы хотели бы сделать. Вы хотите писать, проектировать, код или предоставлять другие услуги? Рассмотри свои навыки, опыт и интересы при выборе типа работы которую ты будешь выполнять.</p>
                        <br>
                        <p>2. Создайте портфолио, которое демонстрирует ваши работы и помогает потенциальным работодателям узнать о вас больше. При помощи фриланса, есть возможность найти клиентов, которые ищут ваши конкретные навыки.</p>
                        <br>
                        <p>3. Сеть и реклама. Обратитесь к клиентам или работодателям через социальные сети, электронную почту или другой метод общения. Если вы специализируетесь в определенной области, присоединяйтесь к соответствующим форумам и группам, чтобы зарекомендовать себя в качестве эксперта.</p>
                        <br>
                        <p>4. Договоритесь об условиях и ценах. Когда вы нашли клиента или работодателя, с которым вы хотите работать, обсудите условия оплаты, график, результаты, цель работы и другие важные детали.</p>
                        <br>
                        <p>5. Приступайте к работе. Сделайте лучшую работу, которую вы можете предоставить для своих клиентов. Убедитесь, что вы соблюдаете сроки, держите связь и при необходимости вносите коррективы в свою работу.</p>
                    </details>

                    <!-- Как составить портфолио? -->
                    <details>
                        <summary class="questions">Как составить портфолио?</summary>
                        <p>1. Выделите направления, по которым вы желаете создать портфолио. Например, у копирайтера это могут быть: коммерческие предложения, тексты для сайтов, слоганы и т.д. У фотографа: репортажная съемка, портреты, свадебная съемка и т.д.</p>
                        <br>
                        <p>2. Отберите ваши лучшие работы и средние по качеству проекты. Оптимально включить в портфолио 10-20 работ по каждому направлению. Это уже создаёт у клиента нормальное представление о вашем уровне.</p>
                        <br>
                        <p>3. Подумайте над красивым оформлением портфолио. Главное, чтобы они были правильно оформлены. Можно создать несколько папок, где можете создавать и сортировать добавленные работы по направлениям.</p>
                        <br>
                        <p>4. Разместите портфолио в Интернете, на личном сайте, флешке или в облаке, чтобы заказчик смог его увидеть. Идеально, если ваше портфолио будет всегда с вами – никогда не знаешь, в какой момент и где оно может пригодиться.</p>
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
