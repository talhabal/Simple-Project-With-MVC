<?php 
    class KayitModel extends Model {
        function __construct()
    {
        parent::__construct();
    }

    function kontrolet($tabloAdi,$sutunlarim,$veri)
    {
        return $this->db->Ekle($tabloAdi,$sutunlarim,$veri); 

        /*

        $sorgu=$this->db->prepare('INSERT INTO ogrenci (ad,soyad,yas) VALUES (:ad,:soyad,:yas)');
        $sorgu->execute(array(
            ':ad'   =>  $_POST["ad"],
            ':soyad'   =>  $_POST["soyad"],
            ':yas'   =>  $_POST["yas"]
        ));
        if ($sorgu) {
            echo "Kayıt eklendi!";
        }
        else {
            echo "Bir hata oluştu";
        } 
         
        */       
    }   
    function listeleme($tabloAdi,$kosul)
    {
        return $this->db->listele($tabloAdi,$kosul);   
    }   
    function silme($tabloAdi,$kosul)
    {
        return $this->db->sil($tabloAdi,$kosul);   
    }  
    function kayitguncel($tabloAdi,$sutunlar,$veri,$kosul)
    {
        return $this->db->guncelle($tabloAdi,$sutunlar,$veri,$kosul);   
    } 

    function kayitarama($tabloAdi,$kosul)
    {
        return $this->db->arama($tabloAdi,$kosul);   
    } 
}

?>