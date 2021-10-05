<?php 
class Database extends PDO {

    protected $dizi =   array(); 
    protected $dizi2 =   array(); 


    function __construct(){
        parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
        $this->bilgi    = new Bilgi();
        
    }

    function Ekle($tabloIsmi,$sutunAdlari,$veriler){
        $sutunSayisi    =   count($sutunAdlari);
        for ($i=0; $i < $sutunSayisi; $i++) { // kaç adet sütun varsa hepsini bir dizinin içerisine ? değerinde atadık
            $this->dizi[]='?';
        }
        $son =   join (",",$this->dizi);    // dizideki verileri bir metine dönüştürüp en sondaki , işaretini kaldırdık

        $finish =   join (",",$sutunAdlari);    // sutunadları dizisini de metine dönüştürüp sql koduna yazdık
        
        $sorgu=$this->prepare('INSERT INTO '. $tabloIsmi. ' ('.$finish.') VALUES ('.$son.')');
        
        if ($sorgu->execute($veriler)) {
            return $this->bilgi->Basarili("Ekleme Başarılı","/kayit/kayitEkle");
        }
        else {
            return $this->bilgi->Hatali("Ekleme Başarısız","/kayit/kayitEkle");
        }
    
    }

    function listele($tabloAdi,$kosul=false){
        if ($kosul==false) {
            $sorgu      =   "SELECT * FROM ". $tabloAdi;
        }
        else {
            $sorgu      =   "SELECT * FROM ". $tabloAdi. " ". $kosul;
        }

        $son    =   $this->prepare($sorgu);
        $son->execute();
        return $son->fetchAll();
    }
    function sil($tabloAdi,$kosul){
        $sorgu      =   $this->prepare("DELETE FROM ". $tabloAdi . " WHERE ".$kosul);
        if ($sorgu->execute()) {
            return $this->bilgi->Basarili("Kayıt Silindi!","/kayit/listele");
        }
        else {
            return $this->bilgi->Hatali("İşlem Başarısız!","/kayit/listele");        
        }

    }

    function guncelle($tabloAdi,$sutunlar,$veriler,$kosul){

        foreach ($sutunlar as $row) {
            $this->dizi2[]=$row."=?";        
        }
        $sonislem   =   join (",",$this->dizi2);

        $sorgu      =   $this->prepare("UPDATE ".$tabloAdi." SET ".$sonislem. " WHERE ".$kosul);
        if ($sorgu->execute($veriler)) {
            return $this->bilgi->Basarili("Güncelleme Başarılı!","/kayit/listele");
        }
        else {
            return $this->bilgi->Hatali("İşlem Başarısız!","/kayit/listele");        
        }

    }

    function arama($tabloAdi,$kosul){
        $sorgu      =   $this->prepare("SELECT * FROM ".$tabloAdi." WHERE ".$kosul);
        $sorgu->execute();
        return $sorgu->fetchAll();

    }

    function GirisKontrol($tabloAdi,$kosul){
        $sorgu      =   $this->prepare("SELECT * FROM ".$tabloAdi." WHERE ".$kosul);
        $sorgu->execute();
        if ($sorgu->rowCount()>0) {
            Session::init();
            Session::set("kulad",true);
        }
        return $sorgu->rowCount();



        

    }



}


?>