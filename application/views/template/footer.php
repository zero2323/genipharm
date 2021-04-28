<!-- Begin footer -->
<div class="footer container-fluid  <?php 
                                                if ($acceuil == true) { echo 'main-page-footer';} elseif ($page == "compliments") {echo 'compliment-footer';} ?> " id="contact">
    <div class="container">
        <div class="row mt-4 p-4">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img src="<?php echo base_url(); ?>Assets/img/logo_footer.png" alt="logo">
            </div>
        </div>
        <div class="second-row row mt-4 ">
            <div class="col-md p-2">
                <h6 class="devider pb-2">Siége Social</h6>
                <p>Annaba,Algérie</p>
            </div>
            <div class="col-md p-2">
                <h6 class="devider pb-2">Usine</h6>
                <p>Souk Ahras,Algérie</p>
            </div>
            <div class="col-md p-2 social-media">
                <h6 class="devider pb-2">Contactez Nous</h6>
                <p><i class="fa fa-phone"></i> +213 (0)556 21 61 19</p>
                <p><i class="fa fa-envelope"></i> Genipharm.co@gmail.com</p>
                <div>
                    <a href="https://www.facebook.com/laboGP23"> <i class="fab fa-facebook-square fa-2x mr-2"></i></a>
                    <a href="https://www.instagram.com/laboratoiregenipharm/"><i class="fab fa-instagram-square fa-2x mr-2"></i></a>
                    <a href="https://www.linkedin.com/company/laboratoire-genipharm/"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- End Footer  -->





<!-- Start Scripts -->
<script>
    var base_url = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>Assets/js/jquery-3.5.1.min.js"></script>
<?php if ($acceuil == true) { ?>
    <script src="<?php echo base_url(); ?>Assets/js/main.js"></script>
<?php } ?>

<?php if ($acceuil == false && $page=="compliments") {?><script src="<?php echo base_url(); ?>Assets/js/meds.js"></script>
<?php } ?>

<?php if ($acceuil == false && ($page=="parapharma" || $page=="p_p_d")) { ?><script src="<?php echo base_url(); ?>Assets/js/cos.js"></script>
<?php } ?>

<?php if ($acceuil == false && $page=="com") { ;?><script src="<?php echo base_url(); ?>Assets/js/com.js"></script>
<?php } ?>
<?php if ($acceuil == false && $page=="profile") { ;?><script src="<?php echo base_url(); ?>Assets/js/profile.js"></script>
<?php } ?>
<script src="<?php echo base_url(); ?>Assets/js/nav.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
<!-- End Scripts -->
</body>

</html>