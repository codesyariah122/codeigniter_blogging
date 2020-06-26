<?php
class M_Page extends CI_Model {

	public function totalpage(){
		$uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);
		$uri_baru = substr($uri, 0, -21);
		//echo $uri_baru."<br/>";
		//echo "<br/><br/><br/><br/><br/>";
		//$result = str_replace("/new_ourcitrus/", "", $uri);
		$result = ltrim($uri, "/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/
		$query = $this->db->query("select * from single_page where link = '".$result."'");
		return $query->num_rows(); 
	}

	public function ViewPage()
	{
		$uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);
		$uri_baru = substr($uri, 0, -21);
		//echo $uri_baru."<br/>";
		//echo "<br/><br/><br/><br/><br/>";
		$result = ltrim($uri, "/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/
		return $this->db->query("select * from single_page where link = '".$result."' order by id desc");
    }
    
    public function hallOfFameView()
    {
		$uri = $_SERVER['REQUEST_URI'];
		$uri_baru = substr($uri, 0, -21);
        $result = ltrim($uri, "/");
        //$result = $this->uri->segment(2);
        $query="SELECT * FROM single_page WHERE link = '$result' ORDER BY id ASC";
        return $this->db->query($query)->result();
    }

}