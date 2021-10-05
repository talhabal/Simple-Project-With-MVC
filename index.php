<?php 
error_reporting(0);

spl_autoload_register( /* spl_autoload_register metodu çağırılması gereken dosyaları olduğu klasörü belirtir. Bu sayede hepsini
    tek tek çağırmaya gerek kalmaz. */
    function ($className){
        $dir            =   __DIR__.'/libs/';
        $dosyaYolu      =   $dir.$className.'.php';
        require_once($dosyaYolu);
});

require_once 'config/genel.php';
require_once 'config/database.php';


$boots      =       new boots;



    















?>