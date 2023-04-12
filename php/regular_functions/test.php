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
            var_dump($arr);
            echo "<br><hr>";
            foreach ($arr as $elem)
            {
                print_r($elem);
                echo "<br><br>";
            }
            echo "<hr>";
            $arr = getPortfolio(1);
            foreach ($arr as $elem)
            {
                foreach ($elem as $key => $value)
                {   
                    if ($key == 'title') {
                        echo "<a href='#'><h3>";
                        echo $value;
                        echo "</h3></a>";
                    }
                    elseif ($key == 'description')
                    {
                        echo "<p>";
                        echo $value;
                        echo "</p>";
                    }
                    elseif ($key is array)
                    {
                        foreach ($key as $doublekey => $triplelem)
                        {
                            // перебор элементов массива
                        }
                    }
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