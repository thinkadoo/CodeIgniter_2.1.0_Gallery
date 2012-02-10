<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

    public function loadimage($name) {

        $data = array(
            'imagename' => $name
        );

        $this->load->view('detail', $data);

    }

}