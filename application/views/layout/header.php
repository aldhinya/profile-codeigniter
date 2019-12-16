<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> - Fadhilatur Rochman</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href='/assets/img/fav.png' rel='icon' type='image/x-icon' />
    <meta property="og:title" content="<?php echo $title; ?> - Fadhilatur Rochman" />
    <meta property="og:site_name" content="<?php echo $title; ?> - Fadhilatur Rochman" />
    <meta property="og:description" content="<?php echo $title; ?> - Fadhilatur Rochman" />
    <meta name="google-site-verification" content="mPOwmxZEsm9O0ktZjvOAVXAzZ1mfLHZ31kL7_xXPYkI" />
    <meta content='Indonesia' name='geo.placename' />
    <meta content='Fadhilatur Rochman' name='Author' />
    <meta content='id' name='geo.country' />
    <meta content='en_US' property='og:locale' />
    <meta content='en_GB' property='og:locale:alternate' />
    <meta content='id_ID' property='og:locale:alternate' />
    <meta content='<?php echo $title; ?> - Fadhilatur Rochman - Aldhinya Aldhi' name=description />
    <meta content='fadhilatur rochman, aldhi, rochman.id, aldhinya, <?php echo $title; ?>' name=keywords />
</head>

<body>
<div class="garis"></div>
<div class="container">
    <div class="logo-container">
        <a href="/"><img src="/assets/img/logo-rochman.png"></a>
    </div>
    <div class="menuku">
        <a href="/" class="<?php echo $menu == 'home' ? 'aktip' : '' ?>">Home</a>
        <a href="/blog" class="<?php echo $menu == 'blog' ? 'aktip' : '' ?>">Blog</a>
        <a href="/about" class="<?php echo $menu == 'about' ? 'aktip' : '' ?>">About</a>
        <a href="/contact" class="<?php echo $menu == 'contact' ? 'aktip' : '' ?>">Contact</a>
    </div>
