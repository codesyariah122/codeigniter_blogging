<?php
class M_Data extends CI_Model {

//Layout utama homepage hati-hati ke hapus
	public function MainSlide()
	{
		return $this->db->get('slide_img');
    }
//layout utama Homepage hati-hati kehapus
    
    public function inventory()
    {
        $this->db->get('produk_data')->result();
    }

	public function allproduct($limit, $start)
	{
        $tipe = $this->uri->segment(3);
        $this->db->where('tipe', $tipe);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('produk_testing', $limit, $start)->result();
	}
	
	public function produk($where)
	{
		$this->db->where($where);
		return $this->db->get('produk_testing')->result();
	}

	public function editproduk($table, $where)
	{
		return $this->db->get_where($table, $where)->result();
	}
    
    public function updateproduk($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->set($data);
       return $this->db->update($table);
    }

    public function countAllproduk()
    {
        $tipe = $this->uri->segment(3);
        $this->db->where('tipe', $tipe);
        return $this->db->get('produk_testing')->num_rows();
    }

// bagian model sudah saya rancang untuk fitur pencarian ini 
	public function search($keyword)
	{
		$this->db->select('*');
		$this->db->from('produk_data');
		$this->db->like('nama', $keyword);
		$this->db->like('key_search', $keyword);
        $this->db->or_like('tipe', $keyword);
		return $this->db->get()->result(); 
    }
    
    public function Users()
    {
        $query = "SELECT * FROM `user` INNER JOIN `user_role` ON `user`.`role_id` = `user_role`.`role_id` 
                    ORDER BY `user`.`id_user` DESC";
        return $this->db->query($query)->result();
    }
    
    public function editprofile($where)
    {
        return $this->db->get_where('user', $where)->result();
    }

	public function updateprofile($where, $data, $table)
	{
        $this->db->where($where);
        $this->db->set($data);
        $this->db->update($table);
	}
	
	public function deleteuser($id)
	{
		$where = ['id_user'=>$id];
		$this->db->where($where);
       	return $this->db->delete('user');
	}
    public function viewpost()
    {
        $uri_read = $this->uri->segment(3);
        $query = "SELECT * FROM `info_terbaru` WHERE `url` = '$uri_read'";
        return $this->db->query($query)->result();
    }
    public function infoterbaru($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('info_terbaru', $limit, $start)->result();
    }
    
    public function countAllpost()
    {
        return $this->db->get('info_terbaru')->num_rows();
    }
	
	public function insertpost()
	{
		$query = "SELECT * FROM `user` INNER JOIN `user_role` ON `user`.`role_id` = `user_role`.`role_id` 
                    ORDER BY `user`.`id_user` DESC";
		$data['user'] = $this->db->query($query)->row_array();
		$judul = $this->input->post('judul');
		$image = 'dummy-post.jpg';
		$content = $this->input->post('content');
		$date = time();
		$author = $this->session->userdata('name');
		$id_user = $data['user']['id_user'];
		$upload_image = $_FILES['image']['name'];
		if($upload_image){
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '5048';
			$config['upload_path'] = './assets/images/post/';
			$this->load->library('upload', $config);

			if($this->upload->do_upload('image')){
				if($image != 'dummy-post.jpg'){
					unlink(FCPATH.'./assets/images/post/'.$image);
				}
				$image = $this->upload->data('file_name');
			}else{
				echo $this->upload->display_errors();
			}
		}
		$data = [
			'judul' => $judul,
			'image' => $image,
			'content' => $content,
			'url' => str_replace(' ', '-', $judul),
			'author' => $author,
			'date_created' => $date,
			'date_post_update' => '',
			'id_user' => $id_user
		];
		$this->db->insert('info_terbaru', $data);
    }
    
	public function editpost($where, $table)
	{
		return $this->db->get_where($table, $where)->row_array();
	}

	public function updatepost($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->set($data);
		$this->db->update($table);
	}

	public function deletepost($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


}