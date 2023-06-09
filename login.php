<html>
  <style>
    #vost_parol {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 500px;
      height: 320px;
      background: #F0F0F0;
      box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.25);
      border-radius: 15px;
      padding: 0px 40px 30px;
    }
    
    * {
      outline: none;
    }

    .windows {
      color: #4779FB;
      font: 400 10px/1.5 "Open Sans", sans-serif;
      text-align: center;
    }

    #lastname {
      margin-right: 5px;
    }

    #e-mail {
      margin-bottom: 20px;
    }

    .widdows .link {
      padding: 4px 8px;
    }

    #password_1 {
      margin-bottom: 20px;
    }

    .windows input {
      margin: 10px 0px;
      width: 100%;
      display: block;
      background-color: none;
      text-align: center;
      padding: 4px 10px;
      border-radius: 8px;
      border: 2px solid #4779FB;
    }

    .windows .submit {
      width: 100%;
      background-color: #4779FB;
      color: white;
      padding: 4px 10px;
      border-radius: 8px;
      border: none;
    }

    .windows h1 {
      font-size: 32px;
      font-weight: 700;
      text-align: center;
      margin: 30px 0px 20px;
    }

    #registration_form {
      /* display: none; */
      background: #F0F0F0;
      box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.25);
      border-radius: 15px;
      padding: 0px 40px 30px;
      max-width: 360px;
      height: 380px;
    }

    div.link:hover {
      background: rgb(192, 192, 192);
    }

    .windows .context {
      color: rgb(71, 71, 71);
    }

    #login {
      background: #F0F0F0;s
      box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.25);
      border-radius: 15px;
      padding: 0px 40px 30px;
      max-width: 340px;
      height: 240px;
    }

    #zabil_parol {
      background: #F0F0F0;
      box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.25);
      border-radius: 15px;
      padding: 0px 40px 30px;
      max-width: 400px;
      height: 350px;
    }
  </style>
  <form class="windows" action="" id="vost_parol">
    <h1>Придумайте новый пароль</h1>
    <!-- <input type="text" id="eml" placeholder="e-mail">
    <input type="text" id="password_old" placeholder="Старый пароль"> -->
    <input type="text" id="password_2" placeholder="Введите новый пароль">
    <input type="text" id="password_3" placeholder="Повторите пароль">
    <input type="submit" class="submit" value="Восстановить доступ">
  </form>  
</html>