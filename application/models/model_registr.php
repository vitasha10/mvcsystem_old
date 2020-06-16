<?php
class Model_Registr extends Model
{
    public function registr()
    {
        if(isset($_POST['login'])){
            $link = mysqli_connect(mysql_server, mysql_user, mysql_pass, mysql_db);    
            $sql = mysqli_query($link, "INSERT INTO `users` (`login`, `pass`) VALUES ('{$_POST['login']}', '{$_POST['pass']}')");
            //AND (`class`='{$class}' OR `class`='any') AND (`method`='{$method}' OR `method`='any')
            setcookie("login", $_POST['login'], time()+3600);
            setcookie("pass", $_POST['pass'], time()+3600);
            return 1;
        }else if(isset($_COOKIE['login'])){
            return 2;
        }else{
            return false;
        }
    }
}