<?php
class urlcontrols extends template\engine
{
 	function __construct(){
		$url = parse_url("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
		$this->render($url['path']);
	}
	protected function render($url){
		$url = str_replace('/social/', '', $url);
		if(preg_match('/^$/', $url))
			return $this->index();
	}
	protected function page(){
		return new template\engine();	
	}
}
?>