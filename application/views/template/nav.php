<?php if ($acceuil == true) { ?>
    <!-- Begin Navbar  -->
    <div class="nav-bar container-fluid sticky-top" id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark " id="nav-b">
            <a class="navbar-brand d-flex flex-row text-left " href="<?php echo base_url(); ?>">
                <div class="img_logo" id="img_logo">
                    <img src="<?php echo base_url(); ?>Assets/img/logo_white.png" id="logo_img" alt="">
                </div>
                <p id="bien" class="d-flex align-items-center">Bienvenu à <span class="ms-1">Genipharm</span></p>
            </a>
            <button id="btn-togler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">
                    <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active ms-2">
                        <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"><i class="fas fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-propos" href="#information"><i class="fas fa-info-circle"></i> À Propos</a>
                    </li>

                    <li class="nav-item dropdown ms-2">
                        <a class="nav-link " href="#big-section" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-list-ul"></i> Nos produits
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-galerie" href="#"><i class="fas fa-image"></i> Galerie</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-contact" href="#"><i class="fas fa-address-book"></i> Contactez-Nous</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"> Partenaire</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ENd Nav Bar  -->
<?php } else if ($acceuil == false && ($page == "partenaire" || $page=="registration")) {
?>
    <!-- Begin Navbar  -->
    <div class="navigation-bar">
        <div class="nav-bar container-fluid sticky-top" id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark " id="nav-b">
                <a class="navbar-brand d-flex flex-row text-left " href="#">
                    <div class="img_logo" id="img_logo">
                        <img src="<?php echo base_url(); ?>Assets/img/logo_white.png" id="logo_img" alt="">
                    </div>
                    <p id="bien" class="d-flex align-items-center">Bienvenu à <span class="ms-1">Genipharm</span></p>
                </a>
                <button id="btn-togler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <i id="icon-togler" class="fas fa-bars" style="color:#fff; "></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active ms-2">
                            <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"> Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-propos" href="#somme">NOTRE ENTREPRISE</a>
                        </li>

                        <li class="nav-item dropdown ms-2">
                            <a class="nav-link  " href="#big-section" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                NOS EXPERTISES
                            </a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-contact" href="#"> Gallerie</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-contact" href="#">Espace Partenaire</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

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
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active ms-2">
                            <a class="nav-link active-link" href="<?php echo base_url(); ?>" id="btn-accueil"><i class="fas fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-propos" href="#information"><i class="fas fa-info-circle"></i> Produits Parapharmaceutiques</a>
                        </li>

                        <li class="nav-item dropdown ms-2">
                            <a class="nav-link disabled " href="#big-section" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-list-ul"></i> Médicaments
                            </a>
                        </li>

                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-contact" href="#"><i class="fas fa-address-book"></i> Contactez-Nous</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" id="btn-contact" href="<?php echo base_url(); ?>page/partenaire"><i class="fas fa-address-book"></i> Partenaire</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ENd Nav Bar  -->

<?php } ?>