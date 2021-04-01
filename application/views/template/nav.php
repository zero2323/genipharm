<?php if ($acceuil == true) { ?>
    <!-- Begin Navbar  -->
    <div class="nav-bar container-fluid sticky-top" id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark " id="nav-b">
            <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                <div class="img_logo" id="img_logo">
                    <img src="<?php echo base_url(); ?>Assets/img/logo_new.png" id="logo_img" alt="">
                </div>
            </a>
            <button id="btn-togler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">
                    <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item active ms-2">
                        <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"> Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ms-2 drop-down">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            notre entreprise
                            </a>
                        <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
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
                            <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div >
                                      <h6 class="text-center">Compléments alimentaires(Gélules et comprimés)</h6>
                                      <p><a  href="">Voir nos Compliements alimentaires.</a></p>
                                  </div>
                                  <div >
                                      <h6 class="text-center">Produits parapharmaceutiques</h6>
                                      <p><a href="">Voir nos produits parapharmaceutiques.</a></p>
                                  </div> 
       
                            </div>
                        </div>
                        </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-galerie" href="#"> Galerie</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-contact" href="#"> Contactez-Nous</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav ms-auto ">
                <li class="nav-item ms-2 partenaire">
                        <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
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
            <nav class="navbar navbar-expand-lg navbar-dark " id="nav-b">
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
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item active ms-2">
                        <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"> Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ms-2 drop-down">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            notre entreprise
                            </a>
                        <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
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
                            <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
                                      <h6>Notre Philosophie</h6>
                                      <p>Réaliser des produits de qualité dans une recherche constante de la satisfaction du client.</p>
                                  </div>          
                            </div>
                        </div>
                        </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-galerie" href="#"> Galerie</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-contact" href="#"> Contactez-Nous</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav ms-auto ">
                <li class="nav-item ms-2 partenaire">
                        <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
    </div>
<?php } else if ($acceuil == false && ($page == "com")) {
?>

    <!-- Begin Navbar  -->
    <div class="navigation-bar">
        <div class="nav-bar container-fluid sticky-top" id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark " id="nav-b">
                <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                    <div class="img_logo" id="img_logo">
                        <img src="<?php echo base_url(); ?>Assets/img/logo.png" id="logo_img" alt="">
                    </div>
                    <p id="bien" class="d-flex align-items-center">Bienvenu à <span class="ms-1">Genipharm</span></p>
                </a>
                <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item active ms-2">
                        <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"> Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ms-2 drop-down">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            notre entreprise
                            </a>
                        <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
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
                            <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
                                      <h6>Notre Philosophie</h6>
                                      <p>Réaliser des produits de qualité dans une recherche constante de la satisfaction du client.</p>
                                  </div>          
                            </div>
                        </div>
                        </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-galerie" href="#"> Galerie</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-contact" href="#"> Contactez-Nous</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav ms-auto ">
                <li class="nav-item ms-2 partenaire">
                        <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
                    </li>
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
            <nav class="navbar navbar-expand-lg navbar-dark " id="nav-b">
                <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                    <div class="img_logo" id="img_logo">
                        <img src="<?php echo base_url(); ?>Assets/img/logo.png" id="logo_img" alt="">
                    </div>
                    <p id="bien" class="d-flex align-items-center">Bienvenu à <span class="ms-1">Genipharm</span></p>
                </a>
                <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item active ms-2">
                        <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"> Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ms-2 drop-down">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            notre entreprise
                            </a>
                        <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
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
                            <div class="drop-content">
                            <div class="d-flex flex-row">
                                  <div >
                                      <h4>Notre Entreprise</h4>
                                      <p>Genipharm est un laboratoire algérien <br> engagé dans
                                        le développement et la production de produits  pharmaceutiques, parapharmaceutiques et cosmétiques. Classé GMP.</p>
                                  </div>
                                  <div>
                                      <h6>Nos Valeurs</h6>
                                      <p>Savoir-faire et Qualité, Engagement, Disponibilité, Responsabilité, Confiance.</p>
                                  </div>
                                  <div>
                                      <h6>Notre Philosophie</h6>
                                      <p>Réaliser des produits de qualité dans une recherche constante de la satisfaction du client.</p>
                                  </div>          
                            </div>
                        </div>
                        </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-galerie" href="#"> Galerie</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-contact" href="#"> Contactez-Nous</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav ms-auto ">
                <li class="nav-item ms-2 partenaire">
                        <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Espace partenaire</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ENd Nav Bar  -->

<?php } ?>