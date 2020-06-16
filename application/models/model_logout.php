<?php
class Model_Logout extends Model
{
    public function logout(){
        setcookie("login", "", time()-3600);
	    setcookie("pass", "", time()-3600);
    }
}
