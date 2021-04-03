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
		$config["full_tag_open"] = "        <!-- Brgin Pagination  --><nav  aria-label=\"...\">	<ul class=\"pagination pagination-lg\">";
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
			if ($n != null) {
				show_404();
				exit();
			}
			$data['page'] = "partenaire";
			$data['title'] = "Partenaire | Connection ";
		} else if ($p == "registration") {
			if ($n != null) {
				show_404();
				exit();
			}
			$data['page'] = "registration";
			$data['title'] = "Partenaire | Inscription";
		} else if ($p == "contact") {
			if ($n != null) {
				show_404();
				exit();
			}
			$data['page'] = "contact";
			$data['title'] = "Contact Nous";
		} else if ($p == "com") {
			if ($n != null) {
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
				// if ($res['activity'] == "Grossiste") {
				// 	$data['price'] = 'prix_gros';
				// } else if ($res['activity'] == "sGrossiste") {
				// 	$data['price'] = 'prix_s_gros';
				// } else if ($res['activity'] == "detaillant") {
				// 	$data['price'] = 'prix_detail';
				// }
				// $config["base_url"] = base_url() . "page/getCommand/p/";
				// $config["total_rows"] = count($this->auth_model->getProductsParapharmAll());
				// $config["per_page"] = 6;
				// $config["uri_segment"] = 4;
				// $this->pagination->initialize($config);
				// $data["links"] = $this->pagination->create_links();
				// $data['productsP'] = $this->auth_model->getProductsParapharm($config["per_page"], 1);

				// $config["base_url"] = base_url() . "page/getCommand/c/";
				// $config["total_rows"] = count($this->auth_model->getProductsComplementAll());
				// $config["per_page"] = 6;
				// $config["uri_segment"] = 4;
				// $this->pagination->initialize($config);
				// $data["links"] = $this->pagination->create_links();
				// $data['productsC'] = $this->auth_model->getProductsComplement($config["per_page"], 1);
			}
		}
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('page/' . $p);
		$this->load->view('template/footer', $data);
	}

	public function command()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}
		if (isset($_POST['name']) && isset($_POST['quantity'])) {
			$email = base64_decode(base64_decode($_SESSION['_logged_in']));
			$res = $this->auth_model->getData($email)[0];
			$res_c = $this->auth_model->get_last_cart($res['id']);
			if (count($res_c) == 0)
				$res_c = 1;
			else $res_c = $res_c[0]['MAX(id_cart)'] + 1;
			foreach ($_POST['name'] as $index => $product) {
				$res_p = $this->auth_model->getProducts($product)[0];
				$this->auth_model->command($res_c, $res["id"], $res_p["id"], $_POST['quantity'][$index]);
			}
		} else {
			exit('NO Allowed Arguments');
		}
	}

	public function getCommand($type = null, $p = null)
	{
		// if (!$this->input->is_ajax_request()) {
		// 	exit('No direct script access allowed');
		// }
		// pagination config
		$config = array();
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = "        <!-- Brgin Pagination  --><nav class='pagination-wrapper' style='margin-top:15px;margin-bottom:15px;' aria-label=\"...\">	<ul class=\"pagination pagination-lg\">";
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
		if ($_SESSION['_logged_in']) {
			$email = base64_decode(base64_decode($_SESSION['_logged_in']));
			$res = $this->auth_model->getData($email)[0];
			if ($res['activity'] == "Grossiste") {
				$price = 'prix_gros';
			} else if ($res['activity'] == "sGrossiste") {
				$price = 'prix_s_gros';
			} else if ($res['activity'] == "detaillant") {
				$price = 'prix_detail';
			}
			if ($type != null) {
				if ($p == null)
					$p = 0;
				else $p = $p - 1;
				if ($type == "p") {
					$config['attributes'] = array('class' => 'page-link parapharm');
					if (isset($_GET['search'])) {
						$search = $_GET['search'];
						$config["base_url"] = base_url() . "getcommand/p/";
						$config["total_rows"] = count($this->auth_model->getProductsParapharmSearchAll($search));
						$config["per_page"] = 6;
						$config["uri_segment"] = 3;
						$this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
						$productsP = $this->auth_model->getProductsParapharmSearch($search, $config["per_page"], $p * $config["per_page"]);
						$result = "";
						foreach ($productsP as $product) {
							$result .= '							<div class=" col-lg-4 col-md-6 card-wrapper  ">' .
								'<div class="card" style="width: 18rem;">' .
								'<img src="' . base_url() . $product['image'] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .
								'<h3 class="card-price">' . $product[$price] . ' DA</h3>' .
								'<a href="#" data-name="' . $product['designation'] . '" data-price="' . $product[$price] . '" class="btn btn-primary add-to-cart produitP" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="' . $product['designation'] . '"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>' .
								'</div>' .
								'</div>' .
								'</div>';
						}
						$result .= $this->pagination->create_links();
					} else {
						$config["base_url"] = base_url() . "getcommand/p/";
						$config["total_rows"] = count($this->auth_model->getProductsParapharmAll());
						$config["per_page"] = 6;
						$config["uri_segment"] = 3;
						$this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
						$productsP = $this->auth_model->getProductsParapharm($config["per_page"], $p * $config["per_page"]);
						$result = "";
						foreach ($productsP as $product) {
							$result .= '							<div class="col-lg-4 col-md-6 card-wrapper  ">' .
								'<div class="card" style="width: 18rem;">' .
								'<img src="' . base_url() . $product['image'] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .
								'<h3 class="card-price">' . $product[$price] . ' DA</h3>' .
								'<a href="#" data-name="' . $product['designation'] . '" data-price="' . $product[$price] . '" class="btn btn-primary add-to-cart produitP" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="' . $product['designation'] . '"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>' .
								'</div>' .
								'</div>' .
								'</div>';
						}
						$result .= $this->pagination->create_links();
					}
				} else if ($type == "c") {
					$config['attributes'] = array('class' => 'page-link complement');
					if (isset($_GET['search'])) {
						$search = $_GET['search'];
						$config["base_url"] = base_url() . "getcommand/c/";
						$config["total_rows"] = count($this->auth_model->getProductsComplementSearchAll($search));
						$config["per_page"] = 6;
						$config["uri_segment"] = 3;
						$this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
						$productsC = $this->auth_model->getProductsComplementSearch($search, $config["per_page"], $p * $config["per_page"]);
						$result = "";
						foreach ($productsC as $product) {
							$result .= '							<div class=" col-lg-4 col-md-6 card-wrapper ">' .
								'<div class="card" style="width: 18rem;">' .
								'<img src="' . base_url() . $product['image'] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .
								'<h3 class="card-price">' . $product[$price] . ' DA</h3>' .
								'<a href="#" data-name="' . $product['designation'] . '" data-price="' . $product[$price] . '" class="btn btn-primary add-to-cart produitC" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="' . $product['designation'] . '"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>' .
								'</div>' .
								'</div>' .
								'</div>';
						}
						$result .= $this->pagination->create_links();
					} else {
						$config["base_url"] = base_url() . "getcommand/c/";
						$config["total_rows"] = count($this->auth_model->getProductsComplementAll());
						$config["per_page"] = 6;
						$config["uri_segment"] = 3;
						$this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
						$productsC = $this->auth_model->getProductsComplement($config["per_page"], $p * $config["per_page"]);
						$result = "";
						foreach ($productsC as $product) {
							$result .= '							<div class="col-lg-4 col-md-6 card-wrapper ">' .
								'<div class="card" style="width: 18rem;">' .
								'<img src="' . base_url() . $product['image'] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .
								'<h3 class="card-title">' . $product[$price] . ' DA</h3>' .
								'<a href="#" data-name="' . $product['designation'] . '" data-price="' . $product[$price] . '" class="btn btn-primary add-to-cart produitC" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="' . $product['designation'] . '"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>' .
								'</div>' .
								'</div>' .
								'</div>';
						}
						$result .= $this->pagination->create_links();
					}
				}
				echo $result;
			}
		} else {
		}
	}
}
