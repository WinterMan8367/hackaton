<?php
    $html = <<<HTML
      <header id='header'>
				<section id='top_panel'>
					<div class='container'>
						<div class='inner flex'>
              <div class='left flex'>
                <a class='logo block' href='https://'></a>
                <a href='#'>Найти заказы</a>
                <a href='#'>Найти фрилансера</a>
              </div>
              <div class='right flex'>
                <div onclick="$.fancybox('#registration_form')" class='registration flex'>
                  <img class='icon' src='img/user_add.png'>
                  <a id='registration_link' href='#'>Регистрация</a>
                </div>
                <div onclick="$.fancybox('#login')" class='login flex'>
                  <img class='icon' src='img/user.png'>
                  <a id='login_link' href='#'>Войти</a>
                </div>
              </div>
						</div>
					</div>
				</section>
			</header>
	    <script src='scripts/script.js'></script>
HTML;


  echo $html;

?>