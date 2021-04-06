<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     * 
     * 
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model("auth_model");
        $this->load->library('session');
        $this->load->helper('url');
    }
    public function signup()
    {

        $email = $this->input->post('email');
        $phone = $this->input->post('Num-Tel');
        $password = $this->input->post('password');
        $r_password = $this->input->post('r_password');
        $type = $this->input->post('metier');
        $signed = $this->auth_model->isSignup($email);
        $error = "";
        if ($signed) {
            if (!$this->auth_model->isRobot($this->input->post("g-recaptcha-response")))
                $error .= "Please check the Robot test<br>";
            $error .= "Email already exists";
            $this->session->set_flashdata('error', $error);
        } else {
            if ($password != $r_password) {
                if (!$this->auth_model->isRobot($this->input->post("g-recaptcha-response")))
                    $error .= "Please check the Robot test<br>";
                $error .= "Password Doesnt Match";
                $this->session->set_flashdata('error', $error);
            } else {
                if (!$this->auth_model->isRobot($this->input->post("g-recaptcha-response"))) {
                    $error .= "Please check the Robot test<br>";
                    $this->session->set_flashdata('error', $error);
                } else {
                    $this->auth_model->signup($email, $password, "NS", $phone, "NS", "NS", "NS", "NS", "NS", "NS", $type);
                    $this->session->set_userdata('_logged_in', base64_encode(base64_encode($email)));
                    $this->session->set_flashdata('success', "Your account created successfully");
                }
            }
        }
        redirect(base_url() . 'page/registration');
    }


    public function complet_signup()
    {

        $email = $this->input->post('email');
        $full_name = $this->input->post('full_name');
        $adresse = $this->input->post('adresse');
        $nif = $this->input->post('nif');
        $art = $this->input->post('art');
        $rc = $this->input->post('rc');
        $bank = $this->input->post('bank');
        $activity = $this->input->post('activite');
        if ($email == "" || $full_name == "" || $adresse == "" || $nif == "" || $art == "" || $rc == "" || $bank == "") {
            $this->session->set_flashdata('error', "All Inputs are Required !!");
            redirect(base_url() . 'page/com');
        } else {
            $this->auth_model->update_signup($email, $full_name, $adresse, $nif, $art, $rc, $bank, $activity);
            redirect(base_url() . 'page/com');
        }
    }
    public function signin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $signed = $this->auth_model->isSignup($email);
        $error = '';
        print_r($_POST);
        if ($signed) {
            $res = $this->auth_model->getData($email)[0];
            if ($res['password'] == $password) {
                if ($this->auth_model->isRobot($this->input->post("g-recaptcha-response"))) {
                    $this->session->set_userdata('_logged_in', base64_encode(base64_encode($email)));
                    //$this->session->set_flashdata('succsess', "you are now logged in as " . $email);
                    redirect(base_url() . 'page/profile');
                } else {
                    $error .= "Please check the Robot test.<br>";
                    $this->session->set_flashdata('error', $error);
                }
            } else {
                if (!$this->auth_model->isRobot($this->input->post("g-recaptcha-response")))
                    $error .= "Please check the Robot test<br>";
                $error .= "email or password is wrong";
                $this->session->set_flashdata('error', $error);
                redirect(base_url() . 'page/partenaire');
            }
        } else {
            if (!$this->auth_model->isRobot($this->input->post("g-recaptcha-response")))
                $error .= "Please check the Robot test.<br>";
            $error .= "No Account with this email or phone number";
            $this->session->set_flashdata('error', $error);
            redirect(base_url() . 'page/partenaire');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('_logged_in');
        redirect(base_url() . 'page/partenaire');
    }
}
