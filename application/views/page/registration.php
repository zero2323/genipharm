   <!-- Sign Up -->

   <section class="signUp">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <img src="<?php echo base_url();?>Assets/img/logo.png" alt="logo">
                <h3 class="py-4">Inscrivez-vous </h3>
            </div>
            <div class="row">
               <form>
                    <div class="form-group my-4">
                        <label for="exampleInputEmail1">Nom d'utilisateur : </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email ou numero de tél.">
                        
                    </div>
                    <div class="form-group my-4">
                        <label for="exampleInputPassword1">Numero de tél :</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Num de télephone.">
                    </div>
                    <div class="form-group my-4">
                        <label for="exampleInputPassword1">Mot de passe :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe.">
                    </div>
                    <div class="form-group my-4">
                        <label for="exampleInputPassword1">confirmer le mot de passe :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe.">
                    </div>
                    <div class="form-group my-4 ">
                        <label for="exampleInputPassword1">Tu est un  :</label> <br>

                        <div>
                            <input type="radio" id="grossiste" name="metier" value="Grossiste"
checked>
                            <label for="Grossiste">Grossiste.</label>
                            </div>

                            <div>
                            <input type="radio" id="Pharmacien" name="metier" value="dewey">
                            <label for="Pharmacien">Pharmacien.</label>
                            </div>
                    </div>
                    <div class="resetPassword">
                        <button type="submit" class="btn btn-primary my-4 connecter">S'inscrire </button>
                        <small id="emailHelp" class="form-text text-muted">Vous avez déja un compte ?<a href="<?php echo base_url(); ?>page/partenaire"><span> cliquez ici.</span></a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- End sign Up -->