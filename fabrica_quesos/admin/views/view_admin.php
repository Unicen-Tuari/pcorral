<?php
require('../libs/Smarty/Smarty.class.php');
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
	public function generaDetallecli($datos)
	{
		$this->smarty->assign("detallecli",$datos);
		$this->smarty->display('pagdetallecli.tpl');
	}

	public function generaTablaque($datos)
	{
		$this->smarty->assign("quesos",$datos);
		$this->smarty->display('tabla_adminque.tpl');
	}
	public function generaDetalleque($datos)
	{
		$this->smarty->assign("detalleque",$datos);
		$this->smarty->display('pagdetalleque.tpl');
	}



	public function generaBuscador()
	{
		$this->smarty->display("buscador.tpl");
	}
	public function generaFormcli()
	{
		$this->smarty->display("nuevocliente.tpl");
	}
	public function generaFormeliminarventa()
	{
		$this->smarty->display("eliminarventa.tpl");
	}
	public function generaFormque()
	{
		$this->smarty->display("nuevoqueso.tpl");
	}
	public function generaFormve()
	{
		$this->smarty->display("nuevoventa.tpl");
	}
	public function generaBusquedacli($datos)
	{
		$this->smarty->assign("clientes",$datos);
		$this->smarty->display("tabla_admincli.tpl");
	}

		public function generaBusquedaque($datos)
	{
		$this->smarty->assign("quesos",$datos);
		$this->smarty->display("tabla_adminque.tpl");
	}
	public function generaBusquedave($datos, $valor_principal,$valor_secundario)
	{
		$this->smarty->assign("ventas",$datos);
		$this->smarty->assign("nomb",$valor_principal);
		$this->smarty->assign("apell",$valor_secundario);
		$this->smarty->display("tabla_adminve.tpl");
	}
	
		public function generaBusquedaventa($datos)
	{
		$this->smarty->assign("detalleventa",$datos);
		$this->smarty->assign("tru",1);
		$this->smarty->display("busqueda_adminque.tpl");
	}
		public function generaBusquedave2($datos, $valor_principal)
	{
		$this->smarty->assign("art",$valor_principal);
		$this->smarty->assign("ventas",$datos);
		$this->smarty->display("tabla_adminve2.tpl");
	}
	
	public function generaAlerta($id)
	{
		if ($id == -2)
		{
			$this->smarty->assign("mensaje",'Cliente actualizado exitosamente.');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -3)
		{
			$this->smarty->assign("mensaje",'Cliente eliminado exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -4)
		{
			$this->smarty->assign("mensaje",'Producto eliminado exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -5)
		{
			$this->smarty->assign("mensaje",'Producto actualizado exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -6)
		{
			$this->smarty->assign("mensaje",'Venta agregada exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -7)
		{
			$this->smarty->assign("mensaje",'Venta eliminada');
			$this->smarty->display('alerta.tpl');
		}
		else
		{
			$this->smarty->assign("mensaje","agregado exitosamente");
			$this->smarty->display('alerta.tpl');
		}
	}
}
?>