<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Mvc Örnek Uygulamamız</title>

<link rel="stylesheet" href="<?php echo URL;?>/design/bootstrap.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>


<body style="background-color: lightblue;">

<div class="container">
	<div class="row">
    
    
    	<div class="col-lg-12 bg-warning">
        <h5 align="center"> MVC Mantığı ile Ekleme Silme ve Güncelleme İşlemleri</h5>
        <a href="<?php echo URL;?>/kayit/kayitEkle">Kayıt Ekle |</a>
        <a href="<?php echo URL;?>/kayit/listele">Kayıtları Göster  |</a>
        <a href="<?php echo URL;?>/ana">Ana Sayfa </a>

        <?php 
        if (Session::get("kulad")==true) {?>
            <a style="float: right;" href="<?php echo URL;?>/panel/cikis">Çıkış </a>
                }
        <?php } 
        else { ?>
        <a style="float: right;" href="<?php echo URL;?>/login/Form">Giriş Yap </a>
        <?php }?>
        

        
        <br><br>

        <form action="<?php echo URL;?>/Kayit/arama" method="POST" style="float: right;">
            <input placeholder="Kelimeyi giriniz..." type="text" name="kelime">
            <input type="submit" name="btn" value="Ara" class="btn btn-danger">
        </form> 
        </div>