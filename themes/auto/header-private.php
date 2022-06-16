<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<? bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php wp_head(); ?>
 
</head>

<body>

  <header class="header header-private">
    <div class="container">
      <div class="header__top">
       <?php the_custom_logo(); ?>
        <a class="phone" href="tel:<?php the_field('phone-number', 9); ?>"><?php the_field('phone'); ?></a>
      </div>
    </div>
  </header>