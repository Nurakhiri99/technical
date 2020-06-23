<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //GET
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('customer')->result();
        } else {
            $this->db->where('customer_id', $id);
            $kontak = $this->db->get('customer')->result();
        }
        $this->response($kontak, 200);
    }
	

	 //CREATE POST
    function index_post() {			
        $data = array(						
                    'name'        => $this->post('name'),
                    'email'       => $this->post('email'),
                    'password'    => sha1($this->post('password')),
					'gender'      => $this->post('gender'),
					'married'  => $this->post('married'),
					'address'     => $this->post('address'));					
        $insert = $this->db->insert('customer', $data);
        if ($insert) {			
            $this->response(array('status' => 'sukses insert data'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	   
	//UPDATE DATA
    function index_put() {
        $id = $this->put('customer_id');
        $data = array(
					'id'        => $this->put('customer_id'),
                    'name'        => $this->put('name'),
                    'email'       => $this->put('email'),                   
					'gender'      => $this->put('gender'),
					'married'  => $this->put('married'),
					'address'     => $this->put('address'));
        $this->db->where('id', $id);
        $update = $this->db->update('customer', $data);
        if ($update) {
            $this->response(array('status' => 'sukses update data'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    
	 //DELETE
    function index_delete() {
        $id = $this->delete('customer_id');
        $this->db->where('customer_id', $id);
        $delete = $this->db->delete('customer');
        if ($delete) {
            $this->response(array('status' => 'sukses Delete data'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>