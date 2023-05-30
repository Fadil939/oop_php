<?php 

// require 'Hobi/CetakInfoHobi.php';
// require 'Hobi/game.php';
// require 'Hobi/Hobi.php';
// require 'Hobi/komik.php';
// require 'Hobi/InfoHobi.php';


spl_autoload_register(function($class ) {
  require_once 'Hobi/' . $class .'.php'; 
});