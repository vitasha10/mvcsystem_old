<link href="/files/css/login.css?<?php echo mt_rand(1,99999);?>" rel="stylesheet">
<div id="login_div">
    <form id="login_form" action="/login" method="post">
        <input id="login_input" type="text" name="login" placeholder="login"><br>
        <input id="password_input" type="password" name="pass" placeholder="password"><br>
        <input id="submit" type="submit" value="Войти">
    </form>
    <?php
    if($data == true){
        echo "<a id=\"go_back_a\" href=\"/main\">Вы уже авторизованы, вернуться?</a>";
    }else{
        echo "<a id=\"go_back_a\" href=\"/\">Назад</a>";
    }
    ?>
    <a id="go_back_a" href="/logout">Выйти</a>
</div>