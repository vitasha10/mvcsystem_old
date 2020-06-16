<?php
class Controller_Logout extends Controller
{
    function __construct()
	{
		$this->model = new Model_Logout();
		$this->view = new View();
	}
	function action_index()
	{	
        $data = $this->model->logout();
        $this->view->generate('index_view.php', 'template_view.php');
	}
}