<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layout_model extends CI_Model {

    public function SliderLayout()
    {
        $query = "SELECT * FROM slide_img";
        return $this->db->query($query)->result();
    }

    public function editslider($where)
    {
        return $this->db->get_where('slide_img', $where)->result();
    }

    public function updateslider($where, $data){
        $this->db->where($where);
        $this->db->set($data);
        $this->db->update('slide_img');
    }

    public function infoterbaru($limit, $start)
    {
        $this->db->where(['author' => $this->session->userdata('name')]);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('info_terbaru', $limit, $start)->result();
    }

    public function countAllpost()
    {
        $query = $this->db->get_where('info_terbaru', ['author'=>$this->session->userdata('name')])->result();
        //var_dump($query);die;
        if($query != NULL ):
        $author = $query[0]->author;
        $total = $this->db->get_where('info_terbaru', ['author' => $author])->num_rows();
        return $total;
        else:
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"> Belum ada postingan </div>');
        endif;
    }

    public function countAllpage()
    {
        $link = $this->uri->segment(3);
        $this->db->where('link', $link);
        return $this->db->get('single_page')->num_rows();
    }

    public function singlepageadmin($where)
    {
        $this->db->where($where);
        return $this->db->get('single_page')->result();
    }
    public function viewsinglepageadmin($where)
    {
        $this->db->where($where);
        $table = $this->uri->segment(3);
        // echo $table; die;
        return $this->db->get($table)->result();
    }

    public function singlepage($limit, $start)
    {
        $link = $this->uri->segment(3);
        $this->db->where('link', $link);
        return $this->db->get('single_page', $limit, $start)->result();
    }

    public function viewpage($table)
    {
        $uri_read = $this->uri->segment(3);
        //echo $uri_read;die;
        $query = "SELECT * FROM `$table` WHERE `url` = '$uri_read'";
        return $this->db->query($query)->result();
    }

    public function halloffame($where)
    {
        $this->db->where($where);
        return $this->db->get('halloffame')->result();
    }

    public function editpage($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function updatepage($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->set($data);
		$this->db->update($table);
	}

}