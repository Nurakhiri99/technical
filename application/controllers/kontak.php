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
            $kontak = $this->db->get('telepon')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('telepon')->result();
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
					'is_married'  => $this->post('is_married'),
					'address'     => $this->post('address'));
        $insert = $this->db->insert('telepon', $data);
        if ($insert) {			
            $this->response(array('status' => 'sukses insert data'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    
	//UPDATE DATA
    function index_put() {
        $id = $this->put('id');
        $data = array(
					'id'        => $this->put('id'),
                    'name'        => $this->put('name'),
                    'email'       => $this->put('email'),                   
					'gender'      => $this->put('gender'),
					'is_married'  => $this->put('is_married'),
					'address'     => $this->put('address'));
        $this->db->where('id', $id);
        $update = $this->db->update('telepon', $data);
        if ($update) {
            $this->response(array('status' => 'sukses update data'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    
	 //DELETE
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('telepon');
        if ($delete) {
            $this->response(array('status' => 'sukses Delete data'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>