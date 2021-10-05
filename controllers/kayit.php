<?php 

class Kayit extends Controller{ 

    function __construct()
    {
        parent::__construct();
        $this->ModelYukle("kayit");
    }

    function kayitEkle(){
        $this->view->goster("form/index");
    }

    function kontrol()
    {   // veritabanı ilişkileri burada yazılacak

        $ad         =       $this->form->get("ad")->bosmu();
        $soyad      =       $this->form->get("soyad")->bosmu();
        $yas        =       $this->form->get("yas")->bosmu();

        if (!empty($this->form->error)) {
            $this->view->goster("form/sonuc",
            $this->form->error,
            $this->bilgi->Hatali(false,"/kayit/kayitEkle"));
        }
        else{
            $sonuc      =   $this->model->kontrolet("ogrenci",array("ad","soyad","yas"),array($ad,$soyad,$yas));

            $this->view->goster("form/sonuc",$sonuc);

        }
    }

    function listele(){
        $sonuc      =   $this->model->listeleme("ogrenci","ORDER BY id ASC");
        $this->view->goster("form/listele",$sonuc);
    }

    function kayitsil($id){
        $sonuc      =   $this->model->silme("ogrenci"," id=".$id);
        $this->view->goster("form/sonuc",$sonuc);
    }

    function kayitguncelle($id){
        $sonuc      =   $this->model->listeleme("ogrenci"," WHERE id=".$id);
        $this->view->goster("form/guncelle",$sonuc);
    }

    function guncelleson(){

        $ad         =       $this->form->get("ad")->bosmu();
        $soyad      =       $this->form->get("soyad")->bosmu();
        $yas        =       $this->form->get("yas")->bosmu();
        $id        =       $this->form->get("kayitid")->bosmu();


        if (!empty($this->form->error)) {
            $this->view->goster("form/sonuc",$this->form->error);
        }
        else{
            $sonuc      =   $this->model->kayitguncel("ogrenci",array("ad","soyad","yas"),array($ad,$soyad,$yas),"id=".$id);

            $this->view->goster("form/sonuc",$sonuc);

        }   
    }
    function arama(){
        $kelime         =       $this->form->get("kelime")->bosmu();
        if (!empty($this->form->error)) {
            $this->view->goster("form/sonuc",$this->form->error);
        }
        else{
            $sonuc      =   $this->model->kayitarama("ogrenci","ad LIKE '%".$kelime."%' or soyad LIKE '%".$kelime."%' or yas LIKE '%".$kelime."%'");
            $this->view->goster("form/listele",$sonuc);
        }
    }
}

?>