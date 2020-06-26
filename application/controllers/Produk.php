<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $uri = $this->uri->segment(3);
        $data['login'] = $this->session->userdata('email');
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
        
        $data['produk_img'] = base_url('assets/images/produk/');
        $tipe = $this->uri->segment(3);
        $data['produk_image'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `tipe` = '$tipe'")->result();
        // var_dump($data['image']);
        // echo "<br/><br/><br/>"; 
        // die;

        $data['MainSlide'] = $this->db->query("SELECT * FROM `slide_img` WHERE `small` = 'products'")->result();
        $data['index_title'] = ucwords($this->uri->segment(3));
        $data['short_title'] = "OurCitrus | ".$this->uri->segment(3);
        $data['og_title'] = $data['MainSlide'][0]->truncate;
        $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$data['produk_image'][0]->tipe.'/';
        $data['og_description'] = $data['MainSlide'][0]->truncate;;
        for($i=0; $i<=count($data['produk_image'])-1; $i++){
            $data['og_image'] = base_url('assets/images/produk/').$data['produk_image'][$i]->image;
        }

        $this->template->myLayout('produk/index', $data);
        
    }

    public function read()
    {
        $data['produk_img'] = base_url('assets/images/produk/');
        $link = $this->uri->segment(4);
        // echo $id; die;
        $data['image'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `link` = '$link'")->result();
        // var_dump($data['image']);
        // echo $data['image'][0]->nama;
        // echo "<br/><br/><br/>"; 
        // die;

        $data['link'] = $this->uri->segment(4);
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $link = $data['link'];
        $data['allproduk'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `link` = '$link' ORDER BY `id` DESC LIMIT 1")->result();
        $data['allproduk_eng'] = $this->db->query("SELECT * FROM `produk_eng` WHERE `link` = '$link' ORDER BY `id` DESC LIMIT 1")->result();
        
        $id =  $data['allproduk'][0]->id; 
        // echo $id; die;
        if($this->uri->segment(4) !== "new-ourcitrus-bea-ultimate-first-sight-lipcream-series"):
        $data['produk_eng_sebelumnya'] = $this->db->query("SELECT * FROM `produk_eng` WHERE `id` = $id-1")->result();
        $data['produk_bahasa_sebelumnya'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `id` = $id-1")->result();
        else:
        $data['produk_bahasa_sebelumnya'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `id` = $id")->result();
        $data['produk_eng_sebelumnya'] = $this->db->query("SELECT * FROM `produk_eng` WHERE `id` = $id")->result();
        endif;
        
        if($this->uri->segment(4) !== "ourcitrus-premium-nutrimax-gcs-minuman-serbuk-rasa-anggur"):
        $data['produk_bahasa_selanjutnya'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `id` = $id+1")->result();
        $data['produk_eng_selanjutnya'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `id` = $id+1")->result();
        else:
        $data['produk_bahasa_selanjutnya'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `id` = $id")->result();
        $data['produk_eng_selanjutnya'] = $this->db->query("SELECT * FROM `produk_testing` WHERE `id` = $id")->result();
        endif;

        $data['link_sebelumnya'] = $data['produk_bahasa_sebelumnya'][0]->link;
        $data['link_selanjutnya'] = $data['produk_bahasa_selanjutnya'][0]->link;
        $data['link_previous'] = $data['produk_eng_sebelumnya'][0]->link;
        $data['link_next'] = $data['produk_eng_selanjutnya'][0]->link;
        // var_dump($data['produk_selanjutnya']);
        // echo "<br/><br/>";
        // echo $data['produk_selanjutnya'][0]->link;
        // die;
        $data['index_title'] = $data['allproduk'][0]->nama;
        $data['og_title'] = $data['allproduk'][0]->deskripsi;
        $data['header_title'] = $data['allproduk'][0]->nama;
        $data['short_title'] = $data['allproduk'][0]->nama;
        $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4);
        $data['og_description'] = $data['allproduk'][0]->deskripsi;
        $data['og_image'] = base_url('assets/images/produk/').$data['allproduk'][0]->image;

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
