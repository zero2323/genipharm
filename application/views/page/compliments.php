<!-- Begin Body  -->
<div class="main py-4">
    <div class="header">
        <div class="title mt-4">
            <h2 class="mt-4">Compliments Alimentaires</h2>
            <hr>
        </div>
        <div class="custom-shape-divider-bottom-1613944329">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <!--Begin Product  -->
    <div class="products mt-4">
        <div class="container">
            <div id="rowone" class="row displaying">
                <?php foreach ($productsC as $product) { ?>
                    <div class="col-lg-4 ">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . getimage($product['image'])[0];  ?>" class="card-img-top" alt="<?php echo $product['designation']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['designation']; ?></h5>
                                <p class="card-text"><?php echo $product['description']; ?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="<?php echo $product['designation']; ?>">EN SAVOIR PLUS</a>
                                <input id="file" value="<?php echo base_url().$product['fdn']; ?>" type="text" hidden/>
                                <input id="des" value="<?php echo $product['description']; ?>" type="text" hidden />
                                <?php foreach (getimage($product['image']) as $image) { ?>
                                    <input class="image" value="<?php echo base_url() . $image; ?>" type="text" hidden/>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <?php print_r($links); ?>

        <!-- Brgin Pagination  -->
        <!-- <nav aria-label="...">
            <ul class="pagination pagination-lg">
                <li class="page-item ">
                    <a class="page-link " id="p1" value="1">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" id="p2" value="2">2</a>
                </li>
            </ul>
        </nav> -->
        <!-- End Pagination -->


    </div>
</div>

<!-- End Body  -->

<!-- Scroll top btn -->
<button id="scroll" class="btn"><i class="fas fa-sort-up"></i></button>
<!-- Scroll Top btn  -->

<!-- Begin Modal  -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Détails du Produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- begin the carousel -->
                <div class="row">
                    <div style="overflow:hidden;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="fas fa-chevron-left black fa-2x"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <i class="fas fa-chevron-right black fa-2x"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="description row">
                    <h3>Description</h3>
                </div>

                <!-- End The Carousel -->
            </div>

            <div class="modal-footer">
                <a id="fichier_d_n" href="#" target="_blanc"  class="btn btn-primary">Télécharger la notice </a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer </button>

            </div>
        </div>
    </div>
</div>

<!-- End The Modal -->