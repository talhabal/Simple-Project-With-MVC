<?php 
class login extends Controller {
    
    function __construct(){
        parent::__construct();
        $this->ModelYukle('Login');

    } 

    function Form(){

        $this->view->goster("form/giris");  

    }

    function GirisKontrol(){

        $kadi           =       $this->form->get("kadi")->bosmu();
        $sifre          =       $this->form->get("sifre")->bosmu();

        if (!empty($this->form->error)) {
            $this->view->goster("form/sonuc",
            $this->form->error,
            $this->bilgi->Hatali(false,"/login/Form"));

        }
        else{
            $sonuc      =   $this->model->GirisKontrol("panel","kadi='$kadi' and sifre='$sifre'");
            if ($sonuc==1) {
                header("Location:".URL."/panel");
            }else {
                $this->view->goster("panel/sonuc",
                $this->form->error,
                $this->bilgi->Hatali('Kullanıcı Adı veya Şifre Hatalı!',"/login/Form"));
            }   

        }
        

    }  



}

?>