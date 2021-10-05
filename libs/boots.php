<?php 

class boots {

    function __construct()
    {
        /* 
        $url            =       explode('/',$_GET["url"]);  
        URL kısmında bulunan her / işaretinden sonrakilere array atadık
        */

        /*
        $url            =       rtrim($_GET["url"],'/');  
        URL kısmında bulunan birden fazla / işareti olduğunda onları bir kez yazılmış gibi görür
        */
        $url            =       isset($_GET["url"]) ? $_GET["url"]:null;  
        $url            =       rtrim($url,'/');  
        $url            =       explode('/',$url);  

        if (empty($url[0])) {   /* Eğer kontrolcü yazılmaz ise varsayılan olarak ana kontrolcüyü çalıştırıyoruz. */
            require_once 'controllers/ana.php';
            $controller     =       new ana();
        }else {
            $file           =       'controllers/'.$url[0].'.php';   
            if (file_exists($file)) {
                require_once $file;
                $controller     =       new $url[0];
                    if (isset($url[2])) {
                        $controller->{$url[1]}($url[2]);
                    }
                    else {
                        $controller->{$url[1]}();    
                    }
                

            }
            else {
                require_once 'controllers/hata.php';
                $hata       =       new hata();
                
            }
        }


       
    }
}

?>