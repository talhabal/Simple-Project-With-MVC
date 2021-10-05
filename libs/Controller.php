<?php 

class Controller {

    function __construct()
    {
        $this->view = new View();
        $this->form = new Form();
        $this->bilgi = new Bilgi();

    }

    function ModelYukle($name) /* ihtiyacımız olan modeli dahil ediyoruz */
    {
        $yol    =   'models/'.$name.'Model.php';
        if (file_exists($yol)) {
            require_once $yol ;
            $modelSinifName     =   $name.'Model';
            $this->model = new $modelSinifName();
        }
    }
}

?>