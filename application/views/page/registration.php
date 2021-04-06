   <!-- Sign Up -->

   <section class="signUp">
       <div class="container">
           <div class="row">
               <div class="col text-center">
                   <img src="<?php echo base_url(); ?>Assets/img/logo.png" alt="logo">
                   <h3 class="py-4">Inscrivez-vous </h3>
               </div>
               <div class="row">
                   <?php $error=$this->session->flashdata('error');
                   $success=$this->session->flashdata('success');
                   if (isset($error)) { ?>
                       <div class="alert alert-danger" role="alert">
                           <?php echo $error; ?>
                       </div>
                   <?php } else if ($success) { ?>
                       <div class="alert alert-success" role="alert">
                           <?php echo $success; ?>
                       </div>
                   <?php } ?>
                   <form method="POST" action="<?php echo base_url(); ?>auth/signup">
                       <div class="form-group my-4">
                           <label for="exampleInputEmail1">Nom d'utilisateur : </label>
                           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email ou numero de tél.">

                       </div>
                       <div class="form-group my-4">
                           <label for="exampleInputPassword1">Numero de tél :</label>
                           <input name="Num-Tel" type="number" class="form-control" id="exampleInputPassword1" placeholder="Num de télephone.">
                       </div>
                       <div class="form-group my-4">
                           <label for="exampleInputPassword1">Mot de passe :</label>
                           <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe.">
                       </div>
                       <div class="form-group my-4">
                           <label for="exampleInputPassword1">confirmer le mot de passe :</label>
                           <input name="r_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe.">
                       </div>
                       <div class="form-group my-4 ">
                           <label for="exampleInputPassword1">Tu est un :</label> <br>

                           <div>
                               <input type="radio" id="grossiste" name="metier" value="Grossiste" checked>
                               <label for="Grossiste">Grossiste.</label>
                           </div>

                           <div>
                               <input type="radio" id="Pharmacien" name="metier" value="Pharmacien">
                               <label for="Pharmacien">Pharmacien.</label>
                           </div>
                       </div>
                       <div class="form-group my-4">
                           <div class="g-recaptcha" data-sitekey="6LeTO58aAAAAALtZm4nO5AamhOQ-JnG_VlFYs5zv"></div>
                       </div>
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
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