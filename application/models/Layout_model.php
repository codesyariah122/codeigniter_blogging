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

    public function addpage()
    {
        $judul = htmlspecialchars(strip_tags($this->input->post('judul')));
        $url = $this->input->post('url');
        $image = 'business.png';
        $link = $this->input->post('link');
        $link_tujuan = $this->input->post('link_tujuan');
        $content = $this->input->post('content');

        $new_image = $_FILES['image']['name'];
        if($new_image){
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
            $config['max_size'] = '10048';
            $config['upload_path'] = './assets/images/page/';
            $this->load->library('upload', $config);

            if($this->upload->do_upload('image')){
                if($image !== 'business.png'){
                    unlink(FCPATH.'./assets/images/page/'.$image);
                    $image = "business.png";
                }
                $image = $this->upload->data('file_name');
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = [
            'judul' => $judul,
            'url' => $url,
            'img' => $image,
            'link' => $link,
            'link_tujuan' => $link_tujuan,
            'content' => $content
        ];
        // var_dump($data); die;
        return $this->db->insert('single_page', $data);
    }

    public function editpage($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function edithalloffame($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function updatehalloffame($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->set($data);
		$this->db->update($table);
	}

    public function updatepage($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->set($data);
		$this->db->update($table);
    }

    public function deletepage($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function get_CURL($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

}