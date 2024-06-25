<?php

class Dashboard extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function dashboard()
	{
		$data['page_id'] = 2;
		$data['page_tag'] = "GC Pequeña Garcia";
		$data['page_title'] = "<b>Panel Administrativo</b> - Pequeña Garcia";
		$data['page_name'] = "dashboard";
		$this->views->getView($this, "dashboard", $data);
	}
}
