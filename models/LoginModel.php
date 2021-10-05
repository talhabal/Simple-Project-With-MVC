<?php 
    class LoginModel extends Model {
        function __construct()
    {
        parent::__construct();
    }

    function GirisKontrol($tabloAdi,$kosul)
    {
        return $this->db->GirisKontrol($tabloAdi,$kosul);  
    }   
   
}

?> 