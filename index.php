<?php
header('Content-type: text/html; charset=utf-8');
session_start();

include "code.php";

$_SESSION['lang'] = $lang = choose_language($_GET, $_SESSION);
$content = choose_content($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
First design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Unofficial Channels
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120723
-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <?php 
    if(strcmp($lang, 'FR') == 0){
      echo "<title>CCÉM - CUMC</title>";
    }
    else{
      echo "<title>CUMC - CCÉM</title>";
    }?>
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="bg1"></div>
    <div id="bg2"></div>
    <div id="outer">
      <div id="header">
	<div id="logo">
	  <?php include($lang . "/uniform/logo.php"); ?>    
	</div>
	<div id="lang">
	  <?php
	  if(strcmp($lang, 'FR') == 0){
            $link = "index.php?lang=EN&content=" . $content;
	    echo "<a href=" . $link . ">English</a>";
	  }
	  else{
            $link = "index.php?lang=FR&content=" . $content;
	    echo "<a href=" . $link . ">Français</a>";
	  }?>
	</div>
	<div id="nav">
	  <?php include($lang . "/uniform/nav.php"); ?>    
	  <br class="clear" />
	</div>
      </div>
      <div id="banner">
	<div class="captions">
	  <?php include($lang . "/uniform/captions.php"); ?>
	</div>
	<img src="images/roger-gaudry.jpg" alt="" />
      </div>
      <div id="main">
	<div id="sidebar">
	  <div class="box">
	    <?php 
            if(strcmp($lang, 'FR') == 0){
              echo "<h3>Nouvelles</h3>";
            }
            else{
              echo "<h3>News</h3>";
            }?>
	    <div class="dateList">
	      <?php include($lang . "/uniform/sidebar-date.php"); ?>
	    </div>
	  </div>
	  <div class="box">
	    <?php include($lang . "/uniform/sidebar.php"); ?>
	  </div>
	</div>
	<div id="content">
	  <?php include($lang . "/" . $content . ".php"); ?>
	  <br class="clear" />
	</div>
	<br class="clear" />
      </div>
    </div>
    <div id="copyright">
      <?php include($lang . "/uniform/footer.php"); ?>
    </div>
  </body>
</html>
