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
		$this->load->helper('security');
		$this->load->library('session');
		$this->load->model('auth_model');
		$this->load->library("pagination");
	}


	public function index()
	{
		$data['acceuil'] = true;
		$data['title'] = "GeniPharm";
		$domaines = $this->auth_model->getDomains();
		$d_array = array();
		$imgs = array();
		$imgs2 = array();
		foreach ($domaines as $domain) {
			foreach (explode(";", $domain["classe"]) as $exp)
				array_push($d_array, $exp);
		}
		$d_array = array_unique($d_array);
		$domains = array_values($d_array);
		$data['domain'] = array();
		$data['domain_cos'] = array();
		foreach ($domains as $d) {
			if ($d == "neurologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/neurology.svg');
			} else if ($d == "gynecologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/sante.svg');
			} else if ($d == "urologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/urology.svg');
			} else if ($d == "gastrologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/gastro.svg');
			} else if ($d == "medcine interne") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/med_interne.svg');
			} else if ($d == "cardiologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/cardio.svg');
			} else if ($d == "rhumatologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/rhumatologie.svg');
			} else if ($d == "dermatologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/dermatology.svg');
			} else if ($d == "traumatologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/traumato.svg');
			} else if ($d == "endocrinologie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/endo.svg');
			} else if ($d == "psyciatrie") {
				array_push($data['domain'], $d);
				array_push($imgs, 'Assets/img/dom/psy.svg');
			} else if ($d == "soin pour les main") {
				array_push($data['domain_cos'], $d);
				array_push($imgs2, 'Assets/img/dom/love.svg');
			} else if ($d == "soin pour visage") {
				array_push($data['domain_cos'], $d);
				array_push($imgs2, 'Assets/img/dom/facial.svg');
			} else if ($d == "soin partie intime") {
				array_push($data['domain_cos'], $d);
				array_push($imgs2, 'Assets/img/dom/sante.svg');
			}
		}
		$data['imgs'] = $imgs;
		$data['imgs_cos'] = $imgs2;
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('home_view', $data);
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
				$this->auth_model->command($res_c, $res["id"], $res_p["id"], $_POST['quantity'][$index], "Non Récus");
			}
		} else {
			exit('NO Allowed Arguments');
		}
	}

	public function getimage($string)
	{
		return explode("@@@", $string);
	}

	public function getCommand($type = null, $p = null)
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}
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
			if ($type != null && isset($price)) {
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
								'<img src="' . base_url() . $this->getimage($product['image'])[0] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .

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
								'<img src="' . base_url() . $this->getimage($product['image'])[0] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .

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
								'<img src="' . base_url() . $this->getimage($product['image'])[0] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .

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
								'<img src="' . base_url() . $this->getimage($product['image'])[0] . '" class="card-img-top" alt="' . $product['designation'] . '">' .
								'<div class="card-body">' .
								'<h5 class="card-title">' . $product['designation'] . '</h5>' .
								'<p class="card-text">' . $product['description'] . '</p>' .

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
			exit("Forbidden");
		}
	}


	public function update_user()
	{

		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}
		$email = base64_decode(base64_decode($_SESSION['_logged_in']));
		$res = $this->auth_model->getData($email)[0];

		if (isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['tel']) && isset($_POST['password'])) {
			if (($_POST['email'] != "" && $_POST['adresse'] != "" && $_POST['tel'] != "" && $_POST['password'] != "") && ($_POST['email'] != $res['email'] || $_POST['adresse'] != $res['adresse'] || $_POST['tel'] != $res['tel'] || $_POST['password'] != $res['password'])) {
				$this->auth_model->update_usr($res["id"], $_POST['email'], $_POST['tel'], $_POST['adresse'], $_POST['password']);
				$this->session->set_flashdata("success", "Update Successful");
				$this->session->set_userdata('_logged_in', base64_encode(base64_encode($_POST['email'])));
				redirect(base_url() . "page/profile");
			} else {
				$this->session->set_flashdata("error", "Check typed information");
				redirect(base_url() . "page/profile");
			}
		} else {
			$this->session->set_flashdata("error", "Error provided Arguments");
			redirect(base_url() . "page/profile");
		}
	}

	public function update_command()
	{
		if (!isset($_SESSION['_logged_in'])) {
			redirect(base_url() . "page/partenaire");
			exit();
		}
		$email = base64_decode(base64_decode($_SESSION['_logged_in']));
		$res = $this->auth_model->getData($email)[0];
		if (isset($_POST['id'])) {
			$this->auth_model->update_status($_POST['id']);
		}
	}

	public function delete_command()
	{
		if (!isset($_SESSION['_logged_in'])) {
			redirect(base_url() . "page/partenaire");
			exit();
		}
		$email = base64_decode(base64_decode($_SESSION['_logged_in']));
		$res = $this->auth_model->getData($email)[0];
		if (isset($_POST['id'])) {
			$this->auth_model->delete_comand($_POST['id']);
		}
	}

	public function v_command()
	{
		if (!isset($_SESSION['_logged_in'])) {
			redirect(base_url() . "page/partenaire");
			exit();
		}
		$email = base64_decode(base64_decode($_SESSION['_logged_in']));
		$res = $this->auth_model->getData($email)[0];
		if (isset($_POST['id']) && isset($_POST['q'])) {
			$this->auth_model->v_command($_POST['id'], $_POST['q']);
		}
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
		$domaines = $this->auth_model->getDomains();
		$d_array = array();
		foreach ($domaines as $domain) {
			foreach (explode(";", $domain["classe"]) as $exp)
				array_push($d_array, $exp);
		}
		$d_array = array_unique($d_array);
		$data['domain'] = array_values($d_array);
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
		} else if ($p == "histoire") {
			if ($n != null) {
				show_404();
				exit();
			}
			$data['page'] = "histoire";
			$data['title'] = "Genipharm";
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
		} else if ($p == "profile") {
			if ($n != null) {
				show_404();
				exit();
			}
			$data['page'] = "profile";
			$data['title'] = "Profile";
			if (!isset($_SESSION['_logged_in'])) {
				redirect(base_url() . "page/partenaire");
				exit();
			}
			$email = base64_decode(base64_decode($_SESSION['_logged_in']));
			$res = $this->auth_model->getData($email)[0];
			if ($res['type'] != "Pharmacien" && $res['type'] != "Grossiste")
				$data['employe'] = true;
			else  $data['employe'] = false;


			$data['full_name'] = $res["full_name"];
			$data['adresse'] = $res["adresse"];
			$data['activity'] = $res["activity"];
			$data['email'] = $res["email"];
			$data['password'] = $res["password"];
			$data['tel'] = $res["tel"];
			$data['commands'] = [];
			if (!$data['employe'])
				$comands = $this->auth_model->get_command($res['id']);
			else $comands = $this->auth_model->get_commands();
			foreach ($comands as $comand) {
				$pr = $this->auth_model->getProductbyID($comand['id_p'])[0];
				if (!$data['employe']) {
					if ($res['activity'] == "Grossiste") {
						$data['price'] = 'prix_gros';
					} else if ($res['activity'] == "sGrossiste") {
						$data['price'] = 'prix_s_gros';
					} else if ($res['activity'] == "detaillant") {
						$data['price'] = 'prix_detail';
					}
					$d = array("command_id" => $comand['id'], "name" => $pr['designation'], "quantity" => $comand['quantité'], "statut" => $comand['statut'], "prix" => $pr[$data['price']], "command" => $comand['id_cart']);
				} else {
					$usr = $this->auth_model->get_user($comand['id_u'])[0];
					if ($usr['activity'] == "Grossiste") {
						$data['price'] = 'prix_gros';
					} else if ($usr['activity'] == "sGrossiste") {
						$data['price'] = 'prix_s_gros';
					} else if ($usr['activity'] == "detaillant") {
						$data['price'] = 'prix_detail';
					}
					$d = array("command_id" => $comand['id'], "u_name" => $usr['full_name'], "tele" => $usr['tel'], "name" => $pr['designation'], "quantity" => $comand['quantité'], "statut" => $comand['statut'], "prix" => $pr[$data['price']], "command" => $comand['id_cart']);
				}
				array_push($data['commands'], $d);
			}
		} else if ($p == "produit_par_domaine") {
			if (isset($_GET["d"])) {
				$d = $_GET["d"];
				$data['p_title'] = $d;
				if ($d == "neurologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "gynecologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "urologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "gastrologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "medcine interne") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "cardiologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "rhumatologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "dermatologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "traumatologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "endocrinologie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "psyciatrie") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "soin pour les main") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "soin pour visage") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else if ($d == "soin partie intime") {
					$data['title'] = $d . " | Produites";
					$data['productsP'] = $this->auth_model->getProductsByD($d);
				} else {
					show_404();
					exit();
				}
				$data['page'] = "p_p_d";
			} else {
				show_404();
				exit();
			}
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
			if ($res['type'] != "Pharmacien" && $res['type'] != "Grossiste") {
				redirect(base_url() . "page/profile");
				$data['employe'] = true;
				exit();
			} else 	$data['employe'] = false;

			if ($res['full_name'] == "NS" && $res['adresse'] == "NS" && $res['bank'] == "NS" && $res['activity'] == "NS") {
				$data['first_time'] = true;
				$data['u'] = $res;
			} else {
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
		$this->load->view('page/' . $p, $data);
		$this->load->view('template/footer', $data);
	}

	public function contact_us()
	{
		// echo str_replace("application/controllers","Assets/uploads",__DIR__);
		if (
			isset($_POST['sujet']) && isset($_POST['email']) && isset($_POST['nom'])
			&& isset($_POST['societe']) && isset($_POST['fonction']) && isset($_POST['tele'])
			&& isset($_POST['message'])
		) {
			$from_email = "zeghidaramzi@gmail.com";
			$to_email = "ramzibrahimovich@gmail.com"; //$this->input->post('email');
			//Load email library
			$this->load->library('email');
			$config = array();
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_user'] = 'zeghidaramzi@gmail.com';
			$config['smtp_pass'] = 'Ramzie23';
			$config['smtp_port'] = 465;
			$config['charset']   = 'utf-8';
			$config['mailtype']  = 'text';
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from($from_email, 'ramzibrahimovich');
			$this->email->to($to_email);
			$this->email->subject($_POST['sujet']);
			$this->email->message('Nom: ' . $_POST['nom'] . "\r\n" .
				"Email: " . $_POST['email'] . "\r\n" .
				"Tele: " . $_POST['tele'] . "\r\n" .
				"Société: " . $_POST['societe'] . "\r\n" .
				"Fonction: " . $_POST['fonction'] . "\r\n" .
				"Message: \r\n" . $_POST['message'] . "\r\n");
			$config = array(
				'upload_path' => str_replace("application/controllers", "Assets/uploads", __DIR__),
				'allowed_types' => "doc|docx|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000"
			);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('userfile')) {
				$data = array('upload_data' => $this->upload->data());
				//print_r($data);
				$this->email->attach($data['upload_data']['full_path']);
				$this->load->helper("file");
				unlink($data['upload_data']['full_path']);
				//print_r($data);
				// $this->load->view('upload_success', $data);
			} else {
				$error = array('error' => $this->upload->display_errors());
				//print_r($error);
				// $this->load->view('custom_view', $error);
			}
			//Send mail
			if (!$this->auth_model->isRobot($this->input->post("g-recaptcha-response"))) {
				$this->session->set_flashdata("error", "Please check the Robot test<br>");
				redirect(base_url() . "page/contact");
			}
			if ($this->email->send()) {
				$this->session->set_flashdata("success", "Congratulation Email Sent Successfully.");
				redirect(base_url() . "page/contact");
			} else {
				$this->session->set_flashdata("error", "You have encountered an error");
				redirect(base_url() . "page/contact");
			}
		}
	}
}
