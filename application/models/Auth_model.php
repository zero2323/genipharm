<?php

class Auth_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function isRobot($token)
    {
        $ch = curl_init();
        $secret="6LeTO58aAAAAAHHiPzN5J58ufIfcUj2gI1Rpf-Rw";

        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            "secret=".$secret."&response=".$token
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);

        $server_output=json_decode($server_output);
        return $server_output->success;
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

    public function command($id_cart, $id_u, $id_p, $quantity,$statut)
    {
        $data = array(
            'id_u' => $id_u,
            'id_p' => $id_p,
            'quantité' => $quantity,
            'id_cart' => $id_cart,
            'statut' => $statut
        );

        $this->db->insert('comande', $data);
    }

    public function get_last_cart($id_u)
    {
        $this->db->select('MAX(id_cart)');
        $this->db->from('comande');
        $this->db->where("id_u",$id_u);
        $this->db->group_by('id_u'); 
        return $this->db->get()->result_array(); 
    }

    public function get_command($id_u)
    {
        $this->db->select('*');
        $this->db->from('comande');
        $this->db->where("id_u",$id_u);
        return $this->db->get()->result_array(); 
    }

    public function get_commands()
    {
        $this->db->select('*');
        $this->db->from('comande');
        return $this->db->get()->result_array(); 
    }

    public function get_user($id_u)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where("id",$id_u);
        return $this->db->get()->result_array(); 
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

    public function update_status($id)
    {
        $data = array(
            'statut' => "Récu",
        );

        $this->db->set($data);
        $this->db->where("id",$id);
        $this->db->update('comande');
    }

    public function delete_comand($id)
    {
        $this->db->where("id",$id);
        $this->db->delete('comande');
    }

    public function v_command($id, $quantity)
    {
        $data = array(
            'quantité' => $quantity,
            'v_client' => 'true'
        );

        $this->db->set($data);
        $this->db->where("id",$id);
        $this->db->update('comande');
    }

    public function update_usr($id,$email,$tel, $address,$password)
    {
        $data = array(
            'email' => $email,
            'tel' => $tel,
            'adresse' => $address,
            'password' => $password

        );

        $this->db->set($data);
        $this->db->where("id",$id);
        $this->db->update('user');
    }

    public function getProducts($search)
    {
        $res = $this->db->get_where('produit',array("designation"=> $search))->result_array();
        return $res;
    }

    public function getProductbyID($search)
    {
        $res = $this->db->get_where('produit',array("id"=> $search))->result_array();
        return $res;
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
