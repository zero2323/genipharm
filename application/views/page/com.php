    <!-- Begin the main  -->
    <section class="main container ">
        <div class="row">
            <div class=" chercher col-md-3 mt-3 text-center">Vous recherchez </div>
            <div class="col-md-7 mt-3 text-center"><input type="text" name="lookfor" id="look" placeholder="Entrez le nom du produit"></div>
            <div class="col-md-2 mt-3 text-center"><button id="find">RECHERCHER</button></div>
        </div>

        <div class="row">
            <div class="produits">
                <div id="rowone" class="parapharm row displaying">
                    <!-- <div class="col-12 title">
                        <div class="clip ">Produits Parapharmaceutique</div>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="row">
            <div class="produits">
                <div id="rowone" class="complement row ">
                    <!-- <div class="col-12 title">
                        <div class="clip ">Complément Alimentaire</div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- End the Main  -->
    <!-- cart modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Panier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="show-cart table">

                    </table>
                    <div>Prix Total : DA <span class="total-cart"></span></div>
                </div>
                <div class="modal-footer">
                    <button id="validate_command" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Valider la commande</button>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary">Fermer </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end card modal  -->

    <?php if ($first_time) { ?>
        <!-- begin modal -->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center modal-title" id="staticBackdropLabel">Veuillez compléter ses informations pour continuer</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <?php $error = $this->session->flashdata('error');
                    if (isset($error)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url(); ?>auth/complet_signup">
                            <div class="form-group my-4">
                                <label for="nomCom">Nom Complet : </label>
                                <input style="display:none;" name="email" value="<?php echo base64_decode(base64_decode($_SESSION['_logged_in'])); ?>" class="form-control" aria-describedby="Nom" placeholder="Votre nom complet.">
                                <input name="full_name" type="text" class="form-control" id="nomCom" aria-describedby="Nom" placeholder="Votre nom complet.">

                            </div>
                            <div class="form-group my-4">
                                <label for="adresse">Adresse :</label>
                                <input name="adresse" type="text" class="form-control" id="adresse" placeholder="Votre adresse.">
                            </div>
                            <div class="form-group my-4">
                                <label for="exampleInputPassword1"> NIF :</label>
                                <input name="nif" type="nummber" class="form-control" id="nif" placeholder="Votre numéro NIF.">
                            </div>
                            <div class="form-group my-4">
                                <label for="exampleInputPassword1"> N° ART :</label>
                                <input name="art" type="number" class="form-control" id="art" placeholder="Votre Numéro ART.">
                            </div>
                            <div class="form-group my-4">
                                <label for="exampleInputPassword1"> N° RC :</label>
                                <input name="rc" type="number" class="form-control" id="rc" placeholder="Votre Numero RC.">
                            </div>
                            <div class="form-group my-4">
                                <label for="exampleInputPassword1"> Banque :</label>
                                <input name="bank" type="text" class="form-control" id="banque" placeholder="Le nom de votre Banque.">
                            </div>
                            <div class="form-group my-4 ">
                                <label for="exampleInputPassword1">Activité :</label> <br>

                                <div>
                                    <input type="radio" id="grossiste" name="activite" value="Grossiste" checked>
                                    <label for="grossiste">Grossiste.</label>
                                </div>

                                <div>
                                    <input type="radio" id="sGrossiste" name="activite" value="sGrossiste">
                                    <label for="sGrossiste">Super Grossiste.</label>
                                </div>

                                <div>
                                    <input type="radio" id="detaillant" name="activite" value="detaillant">
                                    <label for="detaillant">Détaillant</label>
                                </div>
                            </div>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Valider</button>
                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Retourner à la page précedente</button> -->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- end modal  -->
    <?php } ?>