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
                        <div class="dropdown-menu w-100 p-4 "  aria-labelledby="navbarDropdown">
                            <a class=" dropdown-item" href="#">Notre Vision </a>
                            <a class="  dropdown-item" href="#">Notre Mission</a>
                            <a class=" dropdown-item" href="#">Nos Valeurs</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos produits 
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                        <div class="domaine-wrap">
                            <div class="dropdown-item domaine"><b>Domaines :</b>  </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Urologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Gynecologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Gastrologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Medecine Interne.</a>
                                    </div>
                                    <div class="domaine">
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Endocrinologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Neurologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Psychiatre.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Traumatologie.</a>
                                    </div>
                                    <div class="domaine">
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Cardiologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Rhumatologie.</a>
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Dermatologie.</a>
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item disabled"></a>
                            </div>
                        </div>
                                 
                        <div class="domaine-wrap">
                            <div class="dropdown-item domaine"><b>Produits Parapharmaceutiques  :</b>  </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Hydratante Main.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Hydratante Visage.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Anti-rides.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Gel Intime.</a>
                                    </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Attenyl(piqures).</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme réparatrice .</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme dépigmantante.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item disable"></a>
                                    </div>
                                    
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

                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item ms-2 partenaire ">
                        <a class="nav-link " id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
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
                        <div class="dropdown-menu w-100 p-4 "  aria-labelledby="navbarDropdown">
                            <a class=" dropdown-item" href="#">Notre Vision </a>
                            <a class="  dropdown-item" href="#">Notre Mission</a>
                            <a class=" dropdown-item" href="#">Nos Valeurs</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos produits 
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                        <div class="domaine-wrap">
                            <div class="dropdown-item domaine"><b>Domaines :</b>  </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Urologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Gynecologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Gastrologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Medecine Interne.</a>
                                    </div>
                                    <div class="domaine">
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Endocrinologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Neurologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Psychiatre.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Traumatologie.</a>
                                    </div>
                                    <div class="domaine">
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Cardiologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Rhumatologie.</a>
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Dermatologie.</a>
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item disabled"></a>
                            </div>
                        </div>
                                 
                        <div class="domaine-wrap">
                            <div class="dropdown-item domaine"><b>Produits Parapharmaceutiques  :</b>  </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Hydratante Main.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Hydratante Visage.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Anti-rides.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Gel Intime.</a>
                                    </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Attenyl(piqures).</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme réparatrice .</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme dépigmantante.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item disable"></a>
                                    </div>
                                    
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

                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item ms-2 partenaire ">
                        <a class="nav-link " id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
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
                        <li class="nav-item active ms-2">
                            <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"> Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ms-2 drop-down">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                notre entreprise
                            </a>
                            <div class="drop-content  container ">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-xxl-4 ">
                                        <h4>Notre Entreprise</h4>
                                        <p>Genipharm est un laboratoire algérien <br> engagé dans
                                            le développement et la production de produits pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-xxl-4 ">
                                        <h6>Nos Valeurs</h6>
                                        <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-xxl-4 ">
                                        <h6>Notre Philosophie</h6>
                                        <p>Réaliser des produits de qualité dans une recherche constante de la satisfaction du client.</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item ms-2 drop-down">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                nos expertises
                            </a>
                            <div class="drop-content  container ">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-xxl-4 ">
                                        <h4>Nos Expertises</h4>
                                        <p>Genipharm est un laboratoire algérien <br> engagé dans
                                            le développement et la production de produits pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-xxl-4 ">
                                        <h6 class="text-center ">Compléments alimentaires(Gélules et comprimés)</h6>
                                        <p><a href="<?php echo base_url(); ?>page/compliments">Voir nos Compliements alimentaires.</a></p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-xxl-4 ">
                                        <h6 class="text-center ">Produits parapharmaceutiques</h6>
                                        <p><a href="<?php echo base_url(); ?>page/parapharma">Voir nos produits parapharmaceutiques.</a></p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/contact"> Contactez-Nous</a>
                        </li>


                    </ul>

                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item ms-2 partenaire dropdown">
                            <a class="nav-link dropdown-toggle" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Espace partenaire</a>
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
                        <div class="dropdown-menu w-100 p-4 "  aria-labelledby="navbarDropdown">
                            <a class=" dropdown-item" href="#">Notre Vision </a>
                            <a class="  dropdown-item" href="#">Notre Mission</a>
                            <a class=" dropdown-item" href="#">Nos Valeurs</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos produits 
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                        <div class="domaine-wrap">
                            <div class="dropdown-item domaine"><b>Domaines :</b>  </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Urologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Gynecologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Gastrologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Medecine Interne.</a>
                                    </div>
                                    <div class="domaine">
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Endocrinologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Neurologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Psychiatre.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Traumatologie.</a>
                                    </div>
                                    <div class="domaine">
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Cardiologie.</a>
                                        <a  href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Rhumatologie.</a>
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item">Dermatologie.</a>
                                        <a href="<?php echo base_url(); ?>page/compliments" class="dropdown-item disabled"></a>
                            </div>
                        </div>
                                 
                        <div class="domaine-wrap">
                            <div class="dropdown-item domaine"><b>Produits Parapharmaceutiques  :</b>  </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Hydratante Main.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Hydratante Visage.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme Anti-rides.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Gel Intime.</a>
                                    </div>
                                    <div class="domaine">
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Attenyl(piqures).</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme réparatrice .</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item">Créme dépigmantante.</a>
                                        <a href="<?php echo base_url(); ?>page/parapharma" class="dropdown-item disable"></a>
                                    </div>
                                    
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

                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item ms-2 partenaire ">
                        <a class="nav-link " id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    </div>
    <!-- ENd Nav Bar  -->

<?php } ?>