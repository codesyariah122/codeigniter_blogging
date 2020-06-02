<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $uri = $this->uri->segment(3);
        //echo $uri;
        $data['login'] = $this->session->userdata('email');
        $title = $this->db->query("SELECT * FROM `produk_testing` WHERE `tipe` = '$uri'")->row_array();
        //var_dump($title);die;
        $data['index_title'] = "Ourcitrus ".$title['tipe'];
        $config['base_url'] = base_url('produk/index/'.$uri); //site url
        $config['total_rows'] = $this->M_Data->countAllproduk(); //total row
        //echo $config['total_rows'];die;
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Previous';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['produk'] = $this->M_Data->allproduct($config["per_page"], $data['page']);           
        //var_dump($data['produk']);die;
        $data['pagination'] = $this->pagination->create_links();
        $data['meta_index'] = "ourcitrus | website";
        $data['meta_author'] = "pujiermanto";
        $data['meta_content'] = "HomePage Ourcitrus by Pt.Gemilang Citrus Berjaya";
        $data['meta_website_name'] = "OurCitrus By PT. Gemilang Citrus Berjaya";
        $data['meta_uri'] = $_SERVER['REQUEST_URI'];
        $this->template->myLayout('produk/index', $data);
        
    }

    public function read()
    {
        $data['meta_index'] = "ourcitrus | website";
        $data['meta_author'] = "pujiermanto";
        $data['meta_content'] = "HomePage Ourcitrus by Pt.Gemilang Citrus Berjaya";
        $data['meta_website_name'] = "OurCitrus By PT. Gemilang Citrus Berjaya";
        $data['meta_uri'] = $_SERVER['REQUEST_URI'];
        $data['link'] = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['index_title'] = $data['link'];
        $link = $data['link'];
        $data['allproduk'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `link` = '$link'")->result();
        $this->template->myLayout('produk/read', $data);

    }

    public function nutrisi()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Produk Nutrisi";
        $tipe = $this->uri->segment(2);
        $data['link'] = $this->uri->segment(2);
        $data['produk'] = $this->M_Data->produk(['tipe'=>$tipe]);

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/produk/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function kosmetik()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Produk Kosmetik";
        $tipe = $this->uri->segment(2);
        $data['link'] = $this->uri->segment(2);
        // echo $data['link']; die;
        $data['produk'] = $this->M_Data->produk(['tipe'=>$tipe]);

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/produk/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function editproduk($id)
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Edit Produk Kosmetik";
        $where = ['id' => $id];
        $data['edit'] = $this->M_Data->editproduk('produk_data', $where);

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/produk/edit', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function updateproduk()
    {
        $id = $this->input->post('id');
        $where = ['id'=>$id];
        $query= $this->M_Data->editproduk('produk_data', $where);  
        // echo $query[0]->image."<br/>";
        // var_dump($query); die;
        if($query[0]->image == NULL){
            if($query[0]->tipe == "nutrisi"):
                $image = "slider3.jpg";
            elseif($query[0]->tipe == "kosmetik"):
                $image = "slider4.jpg";
            endif;
        }else{
            $image = $query[0]->image;
        }
        $nama = $this->input->post('nama');
        $key_search = strtolower($nama);
        $tipe = $this->input->post('tipe');
        $ingredients = $this->input->post('ingredients');
        $carapenggunaan = $this->input->post('carapenggunaan');
        $deskripsi = $this->input->post('deskripsi');
        $hargamember = $this->input->post('hargamember');
        $harganonmember = $this->input->post('harganonmember');
        $link = strtolower(str_replace(" ","-", $nama));
            
        $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5048';
                $config['upload_path'] = './assets/images/post/';
                $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        if($image != $image){
                            unlink(FCPATH.'./assets/images/produk/'.$image);
                            $image = $image;
                        }
                        $image = $this->upload->data('file_name');
                        //$this->db->set('image', $image);
                    }else{
                        echo $this->upload->display_errors();
                    }
            }
            //echo $image; die;
            $data = [
                'image' => $image,
                'nama' => $nama,
                'key_search' => $key_search,
                'tipe' => $tipe,
                'desc' => $deskripsi,
                'harga_member' => $hargamember,
                'harga_non_member' => $harganonmember,
                'ingredients' => $ingredients,
                'carapenggunaan' => $carapenggunaan,
                'link' => $link,
                'stock_in' => 0,
                'stock_out' =>0
            ];
            //var_dump($data); die;
            $where = ['id' => $id];
            $this->M_Data->updateproduk($where, $data, 'produk_data');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Update Produk success</div>');
            redirect('Produk/'.$tipe);


    }

}
