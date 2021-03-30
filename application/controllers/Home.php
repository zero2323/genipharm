<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		// Your own constructor code
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('auth_model');
	}
	public function index()
	{
		$data['acceuil'] = true;
		$data['title'] = "GeniPharm";
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('home_view');
		$this->load->view('template/footer', $data);
	}

	public function page($p)
	{
		$data['acceuil'] = false;
		if ($p == "compliments") {
			$data['page'] = "compliments";
			$data['title'] = "Compliments Alimentaires";
		} else if ($p == "parapharma") {
			$data['page'] = "parapharma";
			$data['title'] = "Produits Parapharmaceutiques";
		} else if ($p == "partenaire") {
			$data['page'] = "partenaire";
			$data['title'] = "Partenaire | Connection ";
		} else if ($p == "registration") {
			$data['page'] = "registration";
			$data['title'] = "Partenaire | Inscription";
		} else if ($p == "com") {
			$data['page'] = "com";
			$data['title'] = "Partenaire | Commande";
			if (!isset($_SESSION['_logged_in']))
			{
				redirect(base_url()."page/partenaire");
				exit();
			}
			$email = base64_decode(base64_decode($_SESSION['_logged_in']));
			$res = $this->auth_model->getData($email)[0];
			if ($res['full_name'] == "NS" && $res['adresse'] == "NS" && $res['bank'] == "NS" && $res['activity'] == "NS")
				$data['first_time'] = true;
			else $data['first_time'] = false;
		}
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('page/' . $p);
		$this->load->view('template/footer', $data);
	}
}
