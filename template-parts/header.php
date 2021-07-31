<?php

$site_name = 'Totix.pl';

$nav_menu_items = array(
  'offer' => (object) array(
    'class' => '',
    'href'  => '/oferta',
    'name'  => 'Oferta',
  ),
  'references' => (object) array(
    'class' => '',
    'href'  => '/referencje',
    'name'  => 'Referencje',
  ),
  'certificates' => (object) array(
    'class' => '',
    'href' => '/certyfikaty',
    'name' => 'Certyfikaty',
  ),
  'contact' => (object) array(
    'class' => '',
    'href'  => '/kontakt',
    'name'  => 'Kontakt',
  ),
);

if ( $nav_menu_items[$_GET['page']] ) {
  $nav_menu_items[$_GET['page']]->class = 'active';
}

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $meta_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" type="text/css" media="all">
    <link rel="stylesheet" href="css/tenbajt.css?ver=1.0" type="text/css" media="all">
    <!-- Open graph meta -->
    <meta property="og:title" content="<?= $meta_title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:image" content="<?= $meta_image ?>">
    <meta property=”og:url” content="<?= $permalink ?>">
    <meta property="og:site_name" content="<?= $site_name; ?>">
    <meta property="og:type" content="website">
    <meta property=”og:locale” content="pl-PL">
    <!-- Twitter meta -->
    <meta name="twitter:title" content="<?= $meta_title ?>">
    <meta name="twitter:description" content="<?= $meta_description ?>">
    <meta name="twitter:image" content="<?= $meta_image; ?>">
    <meta name="twitter:url" content="<?= $permalink; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Standard favicon -->
    <link rel="icon" href="images/favicons/32.png" sizes="32x32">
    <link rel="icon" href="images/favicons/96.png" sizes="96x96">
    <link rel="icon" href="images/favicons/128.png" sizes="128x128">
    <link rel="icon" href="images/favicons/192.png" sizes="192x192">
    <!-- Android -->
    <link rel="shortcut icon" href="images/favicons/196.png" sizes="196x196">
    <!-- iOS -->
    <link rel="apple-touch-icon" href="images/favicons/120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="images/favicons/152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="images/favicons/180.png" sizes="180x180">
    <!-- Windows 8 -->
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="images/favicons/144.png">
    <meta name="msapplication-square70x70logo" content="images/favicons/128.png">
    <meta name="msapplication-square150x150logo" content="images/favicons/270.png">
    <meta name="msapplication-config" content="none"/>
    <!-- Disable mobile Safari phone number link -->
    <meta name="format-detection" content="telephone=no">
  </head>
  <body>
    <header class="header">
      <nav class="header__wrapper">
        <a class="header__logo-link" href="/">
          <img class="header__logo-image" src="images/logos/totix-light.svg" alt="Logo firmy Totix - Tobiasz Nowacki">
        </a>
        <button class="header__toggler-button" data-toggle="show" data-target="header-nav-items">
          <i class="header__toggler-icon material-icons">
            menu
          </i>
        </button>
        <ul id="header-nav-items" class="header__nav-items">
          <?php foreach( $nav_menu_items as $nav_item ): ?>
            <li class="header__nav-item">
              <a class="header__nav-link <?= $nav_item->class ?>" href="<?= $nav_item->href ?>">
                <?= $nav_item->name ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </header>
    <main class="<?= $page_name ?>">
  
