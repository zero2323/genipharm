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

    public function getProductsParapharm($limit, $start)
    {
        $this->db->limit($limit, $start);
        $res = $this->db->get_where('produit',array('type' => "parapharm"))->result_array();
        return $res;
    }

    public function getProductsComplement($limit, $start)
    {
        $this->db->limit($limit, $start);
        $res = $this->db->get_where('produit',array('type' => "complement"))->result_array();
        return $res;
    }

    public function getProductsParapharmSearch($search,$limit, $start)
    {
        $this->db->limit($limit, $start);
        $res = $this->db->get_where('produit',array('type' => "parapharm","designation Like"=> "%".$search."%"))->result_array();
        return $res;
    }

    public function getProductsComplementSearch($search,$limit, $start)
    {
        $this->db->limit($limit, $start);
        $res = $this->db->get_where('produit',array('type' => "complement","designation Like "=> "%".$search."%"))->result_array();
        return $res;
    }

    public function getProductsParapharmSearchAll($search)
    {
        $res = $this->db->get_where('produit',array('type' => "parapharm","designation Like "=> "%".$search."%"))->result_array();
        return $res;
    }

    public function getProductsComplementSearchAll($search)
    {
        $res = $this->db->get_where('produit',array('type' => "complement","designation Like "=> "%".$search."%"))->result_array();
        return $res;
    }

    public function getProductsParapharmAll()
    {
        $res = $this->db->get_where('produit',array('type' => "parapharm"))->result_array();
        return $res;
    }

    public function getProductsComplementAll()
    {
        $res = $this->db->get_where('produit',array('type' => "complement"))->result_array();
        return $res;
    }

    public function record_countP() {
        return $this->db->get_where('produit',array('type' => "parapharm"))->num_rows();
    }

    public function record_countC() {
        return $this->db->get_where('produit',array('type' => "commplement"))->num_rows();
    }
    
}
