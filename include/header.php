<?php
	echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Paste" content="A page for you to post your code">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Paste XUranus - show your idea with the world</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-cyan.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>  
    <script >hljs.initHighlightingOnLoad();</script>  
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
';

echo '
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  
    <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <h5>XUranus</h5>
          <a href="#history" class="mdl-layout__tab is-active">HISTORY</a>
          <a href="#new" class="mdl-layout__tab">NEW</a>
          <a href="#faq" class="mdl-layout__tab">FAQ</a>
    </div>
      <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
      <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        <h1>Paste&emsp;</h1>
        <img src="image/img2.png"></img>
      </div>
      <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        <p>Share your idea with the world</p>
      </div>
      
    </header>
 
    <main class="mdl-layout__content" default="history">
';
?>