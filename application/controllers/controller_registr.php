<?php
class Controller_Registr extends Controller
{
    function __construct()
	{
		$this->model = new Model_Registr();
		$this->view = new View();
	}
	function action_index()
	{	
        $data = $this->model->registr();
        if($data == 1){
            $this->view->generate('main_view.php', 'template_view.php');
        }else if($data == 2){
            $this->view->generate('is_registr_view.php', 'template_view.php');
        }else if($data == false){
            $this->view->generate('registr_view.php', 'template_view.php');
        }else{
            $this->view->generate('error_view.php', 'template_view.php', $data);
        }
	}
}