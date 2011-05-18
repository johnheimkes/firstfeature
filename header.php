<!DOCTYPE html>
<html lang="en" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>The First Feature</title>
    <meta name="robots" content="index,all" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico" />
    <?php wp_head(); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/app.js"></script>
  </head>
  <body <?php body_class(); ?>>
    <div id="wrapper">
      <div id="mast-head">
        <div id="header">
          <h1><a href="<?php bloginfo('url') ?>">The First Feature</a></h1>
        </div>
      </div>
      <div id="mast-nav">
        <div id="nav">
          <ul>
            <li><a href="<?php bloginfo('url') ?>">Home</a></li>
            <li><a href="<?php bloginfo('url') ?>/the-beginning">The Beginning</a></li>
            <li><a href="<?php bloginfo('url') ?>/life-doesnt-wait">Life Doesn't Wait</a></li>
            <li><a href="<?php bloginfo('url') ?>/untitled">Untitled</a></li>
            <li><a class="dropdown">Episodes</a>
              <ul>
                <li><a href="<?php bloginfo('url') ?>/episodes/episode-1">Episode 1</a></li>
                <li><a href="<?php bloginfo('url') ?>/episodes/episode-2">Episode 2</a></li>
                <li><a href="<?php bloginfo('url') ?>/episodes/episode-3">Episode 3</a></li>
              </ul>
            </li>
            <li><a href="<?php bloginfo('url') ?>/about">About</a></li>
            <li><a href="<?php bloginfo('url') ?>/donate">Donate</a></li>
          </ul>
        </div>
      </div>
      <div id="mast-content">