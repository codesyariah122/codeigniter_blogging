<?php
class M_Single extends CI_Model {

	private $link;

	public function singlekosmetik()
	{
		return $this->db->query("select * from single_product where tipe='kosmetik'");
	}

	public function singlenutrisi()
	{
		return $this->db->query("select * from single_product where tipe='nutrisi'");
	}

	public function singlepage()
	{

		return $this->db->query("select * from single_page order by id desc");
	}

	public function productviewpage()
	{
		return $this->db->get('view_productpage');
	}

	public function halloffame(){
		return $this->db->get('halloffame');
	}

}