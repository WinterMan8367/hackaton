<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
	require_once('db_model.php');
    require_once('functions.php');
?>
<html>
    <head>
		<meta charset="utf-8">
		<title>Test PHP</title>
	</head>
	<body>
		<?php
            echo "<center><h1>Тест функций</h1></center><br>";
            $arr = getPortfolio(1);
            print_r($arr);
            echo "<br><br><center><h1>Тест кода</h1></center><br>";

            $arr = getReviews(1);
            echo test($arr);
        ?>
	</body>
</html>