<?php
//puji ermanto update terbaru 09:26 / 12 may 2020
//create single non page
//belum ada database nya 
//12-03-2018 / Kamis 08:17

defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
    public function send()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('fullname', 'FullName', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|max_length[13]');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if($this->form_validation->run() == false){
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
              })
            </script>
            ";
        }else{
            
        }
    }
}