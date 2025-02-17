<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    private $_table = "customer";

    public $customer_id;
    public $name;
    public $email;
	public $password;
	public $gender;
	public $married;
	public $address;
	
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
			['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],
			['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],
			['field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required'],
			['field' => 'married',
            'label' => 'Married',
            'rules' => 'required'],
			['field' => 'address',
            'label' => 'Address',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["customer_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();        
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = sha1($post["password"]);
		$this->gender = $post["gender"];
		$this->married = $post["married"];
		$this->address = $post["address"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->customer_id = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = $post["password"];
		$this->gender = $post["gender"];
		$this->married = $post["married"];
		$this->address = $post["address"];		
        $this->db->update($this->_table, $this, array('customer_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("customer_id" => $id));
    }
}
