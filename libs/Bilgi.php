<?php 
class Bilgi {

    function Basarili($deger,$yol){ 
        return '<div class="alert alert-success mt-5">'. $deger .'</div>' . header("Refresh:2; url=".URL.$yol);

    }

    function Hatali($deger,$yol){
        return '<div class="alert alert-danger mt-5">'. $deger .'</div>' . header("Refresh:2; url=".URL.$yol);

    }
    






}


?>