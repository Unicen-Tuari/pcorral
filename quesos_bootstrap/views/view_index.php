<?php
require('./libs/Smarty.class.php');
class Viewindex
{
	private $smarty;
	
	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	public function muestraPagina()
	{
		$this->smarty->display('contacto.tpl');
	}
	public function generaTabla($datos)
	{
		$this->smarty->assign("reparaciones",$datos);
		$this->smarty->display('contacto.tpl');
	}
	public function generaAlerta()
	{
		$this->smarty->display('alerta.tpl');
	}
}
?>