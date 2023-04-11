<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
	require_once('db_model.php');
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
            echo "<br>sus2";
        ?>
	</body>
</html>