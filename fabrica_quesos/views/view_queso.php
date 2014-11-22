<?php
require('./libs/Smarty.class.php');
class ViewQueso
{
	private $smarty;
	private $template_name;
	
	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	public function muestraPagina($template_name)
	{
		$this->smarty->display($template_name);
	}
	

	public function generaDetalle($datos, $template)
	{
		$this->smarty->assign("nombre_queso",$datos);
		$this->smarty->display($template);
	}
	public function json($data){
			echo json_encode($data);
			exit();
		}
}
?>