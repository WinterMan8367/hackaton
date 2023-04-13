<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
    echo
      "<header id='header'>
				<section id='top_panel'>
					<div class='container'>
						<div class='inner flex'>
              <div class='left flex'>
                <a class='logo block' href='/index.php'></a>
                <a href='#'>Найти заказы</a>
                <a href='#'>Найти фрилансера</a>
              </div>
              <div class='right flex'>";
              if (!empty($_SESSION['user']))
              {
                echo
                "<div class='login flex'>
                  <img class='icon' src='img/user.png'>
                  <a id='login_link' href='pages/profile/index.php'>";
                echo $_SESSION['user']['firstname'];
                echo
                  "</a>
                </div>";
              }
              else
              {
                echo 
                "<div onclick=", "$.fancybox('#registration_form')", " class='registration flex'>
                  <img class='icon' src='img/user_add.png'>
                  <a id='registration_link' href='#'>Регистрация</a>
                </div>
                <div onclick=", "$.fancybox('#login')", " class='login flex'>
                  <img class='icon' src='img/user.png'>
                  <a id='login_link' href='#'>Войти</a>
                </div>";
              }
    echo
              "</div>
						</div>
					</div>
				</section>
			</header>
	    <script src='scripts/script.js'></script>";

?>