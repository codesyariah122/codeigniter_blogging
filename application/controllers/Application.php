<?php
//puji ermanto update terbaru 09:26 / 12 may 2020
//create single non page
//belum ada database nya 
//12-03-2018 / Kamis 08:17

defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    public function bukutamu()
    {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('fullname', 'FullName', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[13]');
            $this->form_validation->set_rules('message', 'Message', 'required');
            if($this->form_validation->run() === false){
                $data['MainSlide'] = $this->M_Data->MainSlide()->result();
                $data['index_title'] = "Buku Tamu";
                $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/';
                for($i=0; $i<=count($data['MainSlide'])-1; $i++):
                $data['og_description'] = $data['MainSlide'][$i]->header;
                $data['og_image'] = base_url('assets/images/sliders/').$data['MainSlide'][$i]->img;
                $data['short_title'] = $data['MainSlide'][$i]->header;
                endfor;
                $data['header_title'] = "Buku Tamu";
                $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">isi form buku tamu dengan benar</div>');
                $this->template->myLayout('bukutamu', $data);
            }else{
            $fullname = htmlspecialchars(ucwords(stripslashes($this->input->post('fullname'))));
            $email = htmlspecialchars($this->input->post('email'));
            $phone = htmlspecialchars(ucwords(stripslashes($this->input->post('phone'))));
            $message = htmlspecialchars($this->input->post('message'));
            $date = time();
            // $uri = $this->uri->segment(1);
            // echo $uri;die;
            //cek lokasi
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
                
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
                    //Kemudian
                    $url = "https://tools.keycdn.com/geo.json?host=$ip";
                    $dt = file_get_contents($url);
                    $dt = json_decode($dt, true);
                    $lat = $dt['data']['geo']['latitude'];
                    $isp = $dt['data']['geo']['isp'];
                    $lng = $dt['data']['geo']['longitude'];
                    $regional = $dt['data']['geo']['region_name'];
                    $city_name = $dt['data']['geo']['city'];
                    $country_name = $dt['data']['geo']['country_name'];
                        if(!empty($regional) AND (!empty($city_name))):
                            $lokasi = $country_name."/".$city_name ."-".$regional. "(".$isp.")";
                        else:
                            $lokasi = "Server Pribadi";
                        endif;
                    //echo $lat." - ".$lng."<br/>";
                    //echo $lokasi; die;
                    $this->db->insert('buku_tamu', 
                    [
                        'email' => $email,
                        'fullname' => $fullname,
                        'message' => $message,
                        'phone' => $phone,
                        'lat' => $lat,
                        'lng' => $lng,
                        'ip' => $ip,
                        'lokasi' => $lokasi,
                        'date_send' => $date
                        ]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Terima kasih '.$fullname.'</div>');
                    $this->session->set_flashdata('success', 'Terima kasih '.$fullname);
                    redirect('Application/bukutamu');
                }
        }
    }

    public function deletebukutamu($id)
    {
        $where = ['id'=>$id];
        $this->db->where($where);
        $this->db->delete('buku_tamu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Delete bukutamu success</div>');
        redirect('UserPage/bukutamu');
    }

}