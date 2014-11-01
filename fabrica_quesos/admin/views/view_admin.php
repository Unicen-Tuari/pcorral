<?php
require('../libs/Smarty.class.php');
class Viewadmin
{
	private $smarty;
	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	public function muestraPagina()
	{
		$this->smarty->display('admin.tpl');
	}
	public function generaTablacli($datos)
	{
		$this->smarty->assign("clientes",$datos);
		$this->smarty->display('tabla_admincli.tpl');
	}

	public function generaTablaque($datos)
	{
		$this->smarty->assign("quesos",$datos);
		$this->smarty->display('tabla_adminque.tpl');
	}

}
?>