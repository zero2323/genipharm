<?php if ($acceuil == true) { ?>
    <!-- Begin Navbar  -->
    <div class="nav-bar container-fluid sticky-top" id="nav-bar">
        <nav class="navbar navbar-expand-xl navbar-dark " id="nav-b">
            <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                <div class="img_logo" id="img_logo">
                    <img src="<?php echo base_url(); ?>Assets/img/logo_new.png" id="logo_img" alt="">
                </div>
            </a>
            <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">
                    <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Qui Somme Nous ?
                        </a>
                        <div class="dropdown-menu w-100 p-4 " aria-labelledby="navbarDropdown">
                            <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Vision </a>
                            <a class="  dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Mission</a>
                            <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Nos Valeurs</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nos produits
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                            <div class="domaine-wrap">
                                <a class="dropdown-item domaine" href="<?php echo base_url(); ?>page/compliments">Complément alimentaires </a>
                            </div>

                            <div class="domaine-wrap">
                                <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item domaine">Dermo-cosmétique </a>
                            </div>
                        </div>
                    </li>

            <li class="nav-item ms-2">
                <a class="nav-link" id="btn-contact" href="#map"> Où nous trouver ?</a>
            </li>
            <li class="nav-item ms-2">
                <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Contactez-Nous</a>
            </li>

            </ul>
            <ul class="navbar-nav ms-auto social-media ">
                <li class="nav-item ms-2 ">
                    <a href="https://www.facebook.com/laboGP23"><i class="fab soc fa-facebook-square fa-2x"></i></a>
                </li>
                <li class="nav-item ms-3 ">
                    <a href="https://www.linkedin.com/company/laboratoire-genipharm/""><i class="fab soc fa-linkedin fa-2x"></i></a>
                </li>
                <li class="nav-item ms-3 ">
                    <a href="https://www.instagram.com/labo_merine/"><i class="fab soc fa-instagram-square fa-2x"></i></a>
                </li>
            </ul>                            

            <ul class="navbar-nav ms-auto ">
                <li class="nav-item ms-2 partenaire ">
                    <a class="nav-link " id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace client</a>
                </li>
            </ul>
    </div>
    </nav>

    </div>
    <!-- ENd Nav Bar  -->
<?php } else if ($acceuil == false && ($page == "partenaire" || $page == "registration")) {
?>
    <!-- Begin Navbar  -->
    <div class="navigation-bar">
        <div class="nav-bar container-fluid sticky-top" id="nav-bar">
            <nav class="navbar navbar-expand-xl navbar-dark " id="nav-b">
                <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                    <div class="img_logo" id="img_logo">
                        <img src="<?php echo base_url(); ?>Assets/img/logo.png" id="logo_img" alt="">
                    </div>
                </a>
                <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Qui Somme Nous ?
                            </a>
                            <div class="dropdown-menu w-100 p-4 " aria-labelledby="navbarDropdown">
                                <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Vision </a>
                                <a class="  dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Mission</a>
                                <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Nos Valeurs</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nos produits
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                            <div class="domaine-wrap">
                                <a class="dropdown-item domaine" href="<?php echo base_url(); ?>page/compliments">Complément alimentaires </a>
                            </div>

                            <div class="domaine-wrap">
                                <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item domaine">Dermo-cosmétique </a>
                            </div>
                        </div>
                    </li>

                <li class="nav-item ms-2">
                    <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Où nous trouver ?</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Contactez-Nous</a>
                </li>

                </ul>
                <ul class="navbar-nav ms-auto social-media ">
                    <li class="nav-item ms-2 ">
                        <a href="https://www.facebook.com/laboGP23"><i class="fab soc fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="nav-item ms-3 ">
                        <a href="https://www.linkedin.com/company/laboratoire-genipharm/""><i class="fab soc fa-linkedin fa-2x"></i></a>
                    </li>
                    <li class="nav-item ms-3 ">
                        <a href="https://www.instagram.com/labo_merine/"><i class="fab soc fa-instagram-square fa-2x"></i></a>
                    </li>
                </ul>                               
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item ms-2 partenaire ">
                        <a class="nav-link " id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace client</a>
                    </li>
                </ul>
        </div>
        </nav>

    </div>
    </div>
<?php } else if ($acceuil == false && ($page == "com" || $page == "profile")) {
?>

    <!-- Begin Navbar  -->
    <div class="navigation-bar">
        <div class="nav-bar container-fluid sticky-top" id="nav-bar">
            <nav class="navbar navbar-expand-xl navbar-dark " id="nav-b">
                <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                    <div class="img_logo" id="img_logo">
                        <img src="<?php echo base_url(); ?>Assets/img/logo.png" id="logo_img" alt="">
                    </div>
                </a>
                <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Qui Somme Nous ?
                        </a>
                        <div class="dropdown-menu w-100 p-4 " aria-labelledby="navbarDropdown">
                            <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Vision </a>
                            <a class="  dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Mission</a>
                            <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Nos Valeurs</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nos produits
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                            <div class="domaine-wrap">
                                <a class="dropdown-item domaine" href="<?php echo base_url(); ?>page/compliments">Complément alimentaires </a>
                            </div>

                            <div class="domaine-wrap">
                                <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item domaine">Dermo-cosmétique </a>
                            </div>
                        </div>
                    </li>

            <li class="nav-item ms-2">
                <a class="nav-link" id="btn-contact" href="#map"> Où nous trouver ?</a>
            </li>
            <li class="nav-item ms-2">
                <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Contactez-Nous</a>
            </li>


                    </ul>

                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item ms-2 partenaire dropdown">
                            <a class="nav-link dropdown-toggle" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Espace client</a>
                            <ul class="dropdown-menu" aria-labelledby="btn-contact">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>page/profile">Mon Profile</a></li>
                                <?php if (!$employe) { ?>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>page/com">Commader produits</a></li>
                                <?php } ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>auth/logout">Deconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php if (!$employe) { ?>
                        <li class="nav-item ms-2 shopping-cart">
                            <i class="fas fa-cart-arrow-down fa-2x" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> <span class="count-cart">(<span class="total-count"></span>)</span>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ENd Nav Bar  -->

<?php } else if ($acceuil == false) { ?>
    <!-- Begin Navbar  -->
    <div class="navigation-bar">
        <div class="nav-bar container-fluid sticky-top" id="nav-bar">
            <nav class="navbar navbar-expand-xl navbar-dark " id="nav-b">
                <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                    <div class="img_logo" id="img_logo">
                        <img src="<?php echo base_url(); ?>Assets/img/logo.png" id="logo_img" alt="">
                    </div>
                </a>
                <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Qui Somme Nous ?
                            </a>
                            <div class="dropdown-menu w-100 p-4 " aria-labelledby="navbarDropdown">
                                <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Vision </a>
                                <a class="  dropdown-item" href="<?php echo base_url(); ?>page/histoire">Notre Mission</a>
                                <a class=" dropdown-item" href="<?php echo base_url(); ?>page/histoire">Nos Valeurs</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nos produits
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                            <div class="domaine-wrap">
                                <a class="dropdown-item domaine" href="<?php echo base_url(); ?>page/compliments">Complément alimentaires </a>
                            </div>

                            <div class="domaine-wrap">
                                <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item domaine">Dermo-cosmétique </a>
                            </div>
                        </div>
                    </li>

                <li class="nav-item ms-2">
                    <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Où nous trouver ?</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Contactez-Nous</a>
                </li>

                </ul>
                <ul class="navbar-nav ms-auto social-media ">
                <li class="nav-item ms-2 ">
                    <a href="https://www.facebook.com/laboGP23"><i class="fab soc fa-facebook-square fa-2x"></i></a>
                </li>
                <li class="nav-item ms-3 ">
                    <a href="https://www.linkedin.com/company/laboratoire-genipharm/""><i class="fab soc fa-linkedin fa-2x"></i></a>
                </li>
                <li class="nav-item ms-3 ">
                    <a href="https://www.instagram.com/labo_merine/"><i class="fab soc fa-instagram-square fa-2x"></i></a>
                </li>
            </ul>                           
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item ms-2 partenaire ">
                        <a class="nav-link " id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace client</a>
                    </li>
                </ul>
        </div>
        </nav>

    </div>
    </div>
    <!-- ENd Nav Bar  -->

<?php } ?>