    <!-- Begin Main  -->

    <section class="main-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Contact</h3>
                    <p>Vous souhaitez déposer une candidature spontanée? Nous proposer un partenariat? Choisissez le sujet adapté dans le formulaire ci-dessous...</p>
                </div>
            </div>
            <div class="row">
                <form class="row ">
                    <div class="form-group col-lg-6">
                        <label for="exampleInputEmail1">Sujet <span>*</span></label>
                        <select name="cars" id="cars" class="form-control custom-select">
                                <option value="volvo">- Sélectionner -</option>
                                <option value="partenariat">Proposer un partenariat</option>
                                <option value="recrutement">Soumettre une demande d'emploie</option>
                                <option value="rendez">Prendre un rendez-vous</option>
                        </select>
                        
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="exampleInputPassword1">E-mail <span>*</span></label>
                        <input type="text" class="form-control" id="email" placeholder="Saisir votre e-mail.">
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label for="exampleInputPassword1">Nom <span>*</span></label>
                        <input type="text" class="form-control" id="nom" placeholder="Saisir votre nom.">
                    </div>

                    <div class="form-group col-6 ">
                        <label for="exampleInputPassword1">Société <span>*</span></label>
                        <input type="text" class="form-control" id="socite" placeholder="Saisir le nom de votre société.">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Fonction <span>*</span></label>
                        <input type="text" class="form-control" id="fonction" placeholder="Saisir votre fonction.">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Téléphone <span>*</span></label>
                        <input type="number" class="form-control" id="tel" placeholder="Saisir votre numéro de téléphone.">
                    </div>
                    <div class="form-group col-6 d-flex flex-column">
                        <label for="exampleInputPassword1">Message <span>*</span></label>
                        <textarea id="w3review" name="w3review" rows="4" cols="50">
                        
                        </textarea>
                    </div>
                    <div class="form-group col-6 d-flex flex-column">
                        <label for="uploadPdf">Votre CV  <span>*</span></label>
                        <input type="file" id="docpicker" accept=".pdf,.doc">
                        
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary ">Envoyer</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>

    <!-- End Main -->