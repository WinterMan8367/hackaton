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
        <div class="container">
            <div class="intro_block">
                <div class="intro_block_markup">
                    <h1>Работайте с лучшими специалистами</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra arcu ipsum, vitae laoreet odio dignissim sed. Donec ut vestibulum nisi. Nam quis mi tristique, placerat mi eu, efficitur nunc. Morbi tincidunt dui diam, at sollicitudin mi consequat at. Etiam venenatis ac eros maximus varius.</p>
                    <div class="">
                        <form>
                            <img class="icon" src="img/search.png">
                            <input type="text" name=text" class="intro_search" placeholder="Чем я могу вам помочь?">
                        </form>
                        <div>
                            <input type="submit" name="#" class="button_blue" value="Оставить заказ">
                            <input type="submit" name="#" class="button_white" value="Найти заказ">
                        </div>
                    </div>
                </div>
                <div class="intro_block_markup block">
                    <img class="intro_image" src="..">
                </div>
            </div>
        </div>


	    <script src="scripts/script.css"></script>
	</body>
</html>
