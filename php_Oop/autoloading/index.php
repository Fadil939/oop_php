<?php 
//  require_once 'App/Hobi/InfoHobi.php';
// require_once 'App/Hobi/Hobi.php'; 
// require_once 'App/Hobi/komik.php';
// require_once 'App/Hobi/game.php';
// require_once 'App/Hobi/CetakInfoHobi.php';

require_once 'App/init.php';

$hobi1 =new Komik("naruto","sounen JUmp","action",30000,100,) ;
echo"<hr>"; 
$hobi2 =new Game("Call Of Duty III","FPS","Action",80000,46,);

$cetakHobi = new CetakInfoHobi();
 $cetakHobi->tambahHobi($hobi1);
 $cetakHobi->tambahHobi($hobi2);
 echo $cetakHobi->cetak();
 echo "<hr>";
 new coba();
