<?php
class Controller_Login extends Controller
{
    function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}
	function action_index()
	{	
        $data = $this->model->is_logined();
        $this->view->generate('login_view.php', 'template_view.php', $data);
	}
}