<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UMR
 */

 ?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой ЮМР</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header container-fluid">
        <div class="header-wrapper container-xl">
            <nav class="header-nav navbar navbar-expand-sm navbar-dark">
                <a href="#" class="navbar-brand">
                    <h1 class="site-logo">Мой ЮМР</h1>
                </a>
                <ul class="header_menu-list navbar-nav">
                    <li class="header_menu-item navbar-item"><a href="#" class="nav-link">Главная</a></li>
                    <li class="header_menu-item navbar-item"><a href="#" class="nav-link">Новости</a></li>
                    <li class="header_menu-item navbar-item"><a href="/map.html" class="nav-link">Карта</a></li>
                </ul>
            </nav>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-flex img-slide" src="/img/asphalt-slider.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-flex img-slide" src="/img/ighted-city-slider.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-flex img-slide" src="/img/toronto-slider.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Следующий</span>
              </a>
        </div>
    </header>
    <main>