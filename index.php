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
        </main>

	    <script src="scripts/script.css"></script>
	</body>
</html>
