<?php
class Model_Login extends Model
{
    public function is_logined()
    {
        if(isset($_POST['login'])){
            $link = mysqli_connect(mysql_server, mysql_user, mysql_pass, mysql_db);    
            $sql = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM `users` WHERE `login`='{$_POST['login']}' AND `pass`='{$_POST['pass']}'"));
            //AND (`class`='{$class}' OR `class`='any') AND (`method`='{$method}' OR `method`='any')
            if($sql[0] > 0){
                setcookie("login", $_POST['login'], time()+3600);
                setcookie("pass", $_POST['pass'], time()+3600);
                return true;
            }else{
                return false;
            }
        }else if(isset($_COOKIE['login'])){
            $link = mysqli_connect(mysql_server, mysql_user, mysql_pass, mysql_db);    
            $sql = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM `users` WHERE `login`='{$_COOKIE['login']}' AND `pass`='{$_COOKIE['pass']}'"));
            //AND (`class`='{$class}' OR `class`='any') AND (`method`='{$method}' OR `method`='any')
            if($sql[0] > 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
	public function get_data()
	{	
		if($this->is_logined()){
            return "";
        }else{
            return false;
        }
	}
}