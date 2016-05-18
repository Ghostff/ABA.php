<?php
namespace template;
class engine
{
	private $diretory  = null;
	public function __construct(){
		$this->diretory = ROOT.'templates'.DIRSEP.'files';
	}
	protected function html($filename, $attr = null)
	{
		echo $this->diretory;
	}
}

?>