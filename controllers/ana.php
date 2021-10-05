<?php 

class ana extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->goster("index/index");
    }

    /*
    function ilerle()
    {
        $this->ModelYukle('P');    
    }
        Örnek olarak PModel.php dosyasını çağırdık metot sayesinde
    */
}

?>