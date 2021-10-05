<?php 

class View {

   
    function goster($dosyaAd,$data=null,$yonlen=null)
    {
        require_once 'views/'. $dosyaAd.'.php';
        
    }
}

?>