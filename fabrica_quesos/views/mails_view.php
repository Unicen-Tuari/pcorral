<?php 
	

	/**
	 * CLase MailsView
	 */
	class MailsView 
	{
		/**
		 * Constructor
		 * */
		function __construct()
		{
			parent::__construct();
			$this->addDir("./templates/");
		}

		private $listadoProductosTpl = "listado.tpl";
		
		public function listadoProductos($data){
			$this->set("productos",$data);
			return $this->read($this->listadoProductosTpl);
		}
	}


 ?>