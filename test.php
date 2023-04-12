<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
            echo "sus<br>";
            $db = new MysqlModel();
            $db->goResult("SELECT * FROM USERS");
            $arr = $db->goResult("SELECT * FROM USERS");
            var_dump($arr);
            echo "<br>sus2<br><br>";
            $arr = getUserInfo(1);
            var_dump($arr);
            echo "<br><br>";
            $arr = getUserCategories(1);
            var_dump($arr);
        ?>
	</body>
</html>