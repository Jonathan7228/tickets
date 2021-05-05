<?php 

/**
* 
*/
class Views
{
	
	function __construct()
	{
		
	}

	function render($controller,$view,$array){
		$controllers = get_class($controller);
		require_once VIEWS.DTF.'head.php';
		require_once VIEWS.DTF.'menu.php';
		require_once VIEWS.$controllers.'/'.$view.'.php';
		require_once VIEWS.DTF.'menu.php';
		require_once VIEWS.DTF.'footer.php';
	}
}

 ?>