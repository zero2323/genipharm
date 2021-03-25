<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.css">
    <?php if ($acceuil == true) { ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.css">
    <?php } ?>
    <?php if ($acceuil != true && $page=="compliments") { ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/meds.css"><?php } ?>
    <?php if ($acceuil != true && $page=="parapharma") { ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/cos.css">
    <?php } ?>
    <?php if ($acceuil != true && ($page=="partenaire" || $page=="registration" )) { ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/partenaire.css">
    <?php } ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Acme&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Roboto+Condensed:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&display=swap" rel="stylesheet">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>Assets/img/logo_title.png" />
</head>

<body>