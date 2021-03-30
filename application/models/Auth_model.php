<?php

class Auth_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }
    public function isSignup($email)
    {
        $query = $this->db->get_where('user', array('email' => $email));
        if ($query->num_rows() > 0)
            return true;
        else return false;
    }

    public function signup($email, $password, $full_name, $tel, $address, $nif, $art, $rc, $bank, $activity, $type)
    {
        $data = array(
            'email' => $email,
            'password' => $password,
            'full_name' => $full_name,
            'tel' => $tel,
            'adresse' => $address,
            'Nif' => $nif,
            'ART' => $art,
            'RC' => $rc,
            'bank' => $bank,
            'activity' => $activity,
            'type' => $type,

        );

        $this->db->insert('user', $data);
    }

    public function update_signup($email,$full_name, $address, $nif, $art, $rc, $bank, $activity)
    {
        $data = array(
            'full_name' => $full_name,
            'adresse' => $address,
            'Nif' => $nif,
            'ART' => $art,
            'RC' => $rc,
            'bank' => $bank,
            'activity' => $activity

        );

        $this->db->set($data);
        $this->db->where("email",$email);
        $this->db->update('user');
    }

    public function getData($email)
    {
        $res = $this->db->get_where('user', array('email' => $email))->result_array();
        return $res;
    }
    
}
