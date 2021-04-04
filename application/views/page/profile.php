    <!-- begin the main  -->


    <section class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-4 informations">
                    <div>
                        <ul>
                            <li><img src="<?php echo base_url();?>Assets/img/profile.png" alt=""></li>
                            <li>
                                <input type="text" name="Fullname" id="fullname" value="<?php echo $full_name; ?>" readonly="readonly">
                            </li>
                            <li>
                                <input type="text" name="Activity" id="activite" value="<?php echo $activity; ?>" readonly="readonly">
                            </li>
                            <li>
                                <input type="text" name="fullAddress" id="address-top" value="<?php echo $adresse; ?>" readonly="readonly">
                            </li>

                        </ul>
                    </div>

                    <div>
                        <?php $error = $this->session->flashdata('error');
                        $success = $this->session->flashdata('success');
                        if (isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php } else if ($success) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $success; ?>
                            </div>
                        <?php } ?>
                        <form method="POST" action="<?php echo base_url(); ?>update_user">
                            <ul>
                                <li>
                                    <label for="">E-mail :</label>
                                    <input class="inputchange" type="text" name="email" id="email" value="<?php echo $email; ?>" readonly="readonly"><i class="fas fa-pen"></i>
                                </li>
                                <li>
                                    <label for="">Mot de pass :</label>
                                    <input class="inputchange" type="password" name="password" id="activitee" value="<?php echo $activity; ?>" readonly="readonly"><i class="fas fa-pen"></i>
                                </li>
                                <li>
                                    <label for="">Numéro de tél :</label>
                                    <input class="inputchange" type="number" name="tel" id="num" value="<?php echo $tel; ?>" readonly="readonly"><i class="fas fa-pen"></i>
                                </li>
                                <li>
                                    <label for="">Adresse :</label>
                                    <input class="inputchange" type="text" name="adresse" id="adresse" value="<?php echo $adresse; ?>" readonly="readonly"><i class="fas fa-pen"></i>
                                </li>
                                <li class="mt-4">
                                    <button type="submit" class="btn btn-success ms-auto me-2 ">Modifier</button>
                                    <button id="annuler" type="button" class="btn btn-danger me-auto">Annuler</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 col-lg-8 commandes">
                    <h5>Mes Commande</h5>
                    <table class="table">
                        <thead class="table-head">
                            <tr class="text-center">
                                <th scope="col">Commande N° </th>
                                <?php if ($employe) { ?>
                                    <th scope="col">Client</th>
                                    <th scope="col">Numéro de tél</th>
                                <?php } ?>
                                <th scope="col">Produit</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($commands as $command) { ?>
                                <tr>
                                    <th class="id" scope="row"><?php echo $command['command']; ?></th>
                                    <?php if ($employe) { ?>
                                        <td><?php echo $command['u_name']; ?></td>
                                        <td><?php echo $command['tele']; ?></td>
                                    <?php } ?>
                                    <td><?php echo $command['name']; ?></td>
                                    <td><?php echo $command['quantity']; ?></td>
                                    <td><?php echo $command['statut']; ?></td>
                                    <td>
                                        <button data-id="<?php echo $command['command_id']; ?>" class="recu btn btn-success">Commande reçu</button>
                                        <button data-id="<?php echo $command['command_id']; ?>" class="del btn btn-danger"> Supprimer</button>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- End The Main  -->