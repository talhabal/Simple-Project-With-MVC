<?php require_once 'views/header.php'; ?>
<div class="col-lg-12">
    
        
            <h5 align="center">Kayıt Ekleme Formu</h5>
       
        <div class="col-lg-12" align="center">
            <form action="<?php echo URL;?>/Kayit/kontrol" method="POST">
                <input type="text" name="ad" placeholder="Adı"><br><br>
                <input type="text" name="soyad" placeholder="Soyadı"><br><br>
                <input type="text" name="yas" placeholder="Yaşı"><br><br>

                <input type="submit" value="Ekle" class="btn btn-success">

            </form>
        </div>
            
    
</div>
    



<?php require_once 'views/footer.php';?>