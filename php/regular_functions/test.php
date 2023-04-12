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
            echo "sus<br>";
            $db = new MysqlModel();
            $db->goResult("SELECT * FROM USERS");
            $arr = $db->goResult("SELECT * FROM USERS");
            var_dump($arr);
            echo "<br>sus2<br><br>";
            $arr = getUserInfo(1);
            var_dump($arr);
            echo "<br><br>";

            echo "<center><h1>Тест функций</h1></center><br>";
            $arr = getPortfolio(1);
            print_r($arr);
            echo "<br><br><center><h1>Тест кода</h1></center><br>";

            $arr = getPortfolio(1);
            echo test($arr);
            echo "<hr>";

            foreach ($arr as $key => $value) {    
                echo "<div><a href='#'><h3>";
                echo $value['title'];
                echo "</h3></a>";
                echo "<p>";
                echo $value['description'];
                echo "</p></div>";
                foreach ($value['files'] as $k => $v){
                    echo $v['filepath'], $v['filename'], $v['extension'];
                }
            }
            
        ?>
            <hr>
             <div>
                <a href="#"><h3>Сайт кондитерской</h3></a>
                <p>Нахуй я тут есть ААА!!! PRess FFF</p>
              </div>
	</body>
</html>