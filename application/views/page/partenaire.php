   <!-- Sign Up -->

   <section class="signUp">
       <div class="container">
           <div class="row">
               <div class="col text-center">
                   <img src="<?php echo base_url(); ?>Assets/img/logo.png" alt="logo">
                   <h3 class="py-4">Connectez-vous </h3>
               </div>
               <div class="row">
                   <?php $error = $this->session->flashdata('error');
                    $success = $this->session->flashdata('succsess');
                    if (isset($error)) { ?>
                       <div class="alert alert-danger" role="alert">
                           <?php echo $error; ?>
                       </div>
                   <?php } else if ($success) { ?>
                       <div class="alert alert-success" role="alert">
                           <?php echo $success; ?>
                       </div>
                   <?php } ?>
                   <form method="POST" action="<?php echo base_url(); ?>auth/signin">
                       <div class="form-group my-4">
                           <label for="exampleInputEmail1">Nom d'utilisateur : </label>
                           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email ou numero de tél">

                       </div>
                       <div class="form-group my-4">
                           <label for="exampleInputPassword1">Mot de passe :</label>
                           <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                       </div>
                       <div class="form-group my-4">
                           <div class="g-recaptcha" data-sitekey="6LeTO58aAAAAALtZm4nO5AamhOQ-JnG_VlFYs5zv"></div>
                       </div>
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                       <div class="resetPassword">
                           <button type="submit" class="btn btn-primary my-4 connecter">Se connecter </button>
                           <small id="emailHelp" class="form-text text-muted">Mot de passe Oublié ?<a href="<?php echo base_url(); ?>page/registration"><span> cliquez ici.</span></a></small>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </section>


   <!-- End sign Up -->