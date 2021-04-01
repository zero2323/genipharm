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
		$this->load->library("pagination");
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

	public function page($p, $n = null)
	{
		// pagination config
		$config = array();
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = "        <!-- Brgin Pagination  --><nav aria-label=\"...\">	<ul class=\"pagination pagination-lg\">";
		$config["full_tag_close"] = " </ul></nav>";
		$config["first_tag_open"] = "                <li class=\"page-item \">";
		$config["first_tag_close"] = "</li>";
		$config["last_tag_open"] = "                <li class=\"page-item \">";
		$config["last_tag_close"] = "</li>";
		$config["next_tag_open"] = "                <li class=\"page-item \">";
		$config["next_tag_close"] = "</li>";
		$config["prev_tag_open"] = "                <li class=\"page-item \">";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "                <li class=\"page-item \"><a class='page-link' >";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "                <li class=\"page-item \">";
		$config["num_tag_close"] = "</li>";
		$config['attributes'] = array('class' => 'page-link');
		// 
		// 
		$data['acceuil'] = false;
		if ($p == "compliments") {
			$config["base_url"] = base_url() . "page/compliments";
			$config["total_rows"] = count($this->auth_model->getProductsComplementAll());
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);

			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
			$page = $page - 1;
			$data["links"] = $this->pagination->create_links();
			$data['productsC'] = $this->auth_model->getProductsComplement($config["per_page"], $page * $config["per_page"]);
			$data['page'] = "compliments";
			$data['title'] = "Compliments Alimentaires";
		} else if ($p == "parapharma") {
			$config["base_url"] = base_url() . "page/parapharma";
			$config["total_rows"] = count($this->auth_model->getProductsParapharmAll());
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);

			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
			$page = $page - 1;
			$data["links"] = $this->pagination->create_links();
			$data['productsP'] = $this->auth_model->getProductsParapharm($config["per_page"], $page * $config["per_page"]);
			$data['page'] = "parapharma";
			$data['title'] = "Produits Parapharmaceutiques";
		} else if ($p == "partenaire") {
			if ($n != null)
			{
				show_404();
				exit();
			}
			$data['page'] = "partenaire";
			$data['title'] = "Partenaire | Connection ";
		} else if ($p == "registration") {
			if ($n != null)
			{
				show_404();
				exit();
			}
			$data['page'] = "registration";
			$data['title'] = "Partenaire | Inscription";
		} else if ($p == "com") {
			if ($n != null)
			{
				show_404();
				exit();
			}
			$data['page'] = "com";
			$data['title'] = "Partenaire | Commande";
			if (!isset($_SESSION['_logged_in'])) {
				redirect(base_url() . "page/partenaire");
				exit();
			}
			$email = base64_decode(base64_decode($_SESSION['_logged_in']));
			$res = $this->auth_model->getData($email)[0];
			if ($res['full_name'] == "NS" && $res['adresse'] == "NS" && $res['bank'] == "NS" && $res['activity'] == "NS")
				$data['first_time'] = true;
			else {
				$data['first_time'] = false;
				if ($res['activity'] == "Grossiste") {
					$data['price'] = 'prix_gros';
				} else if ($res['activity'] == "sGrossiste") {
					$data['price'] = 'prix_s_gros';
				} else if ($res['activity'] == "detaillant") {
					$data['price'] = 'prix_detail';
				}
				$data['productsP'] = $this->auth_model->getProductsParapharmAll();
				$data['productsC'] = $this->auth_model->getProductsComplementAll();
			}
		}
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('page/' . $p);
		$this->load->view('template/footer', $data);
	}
}
