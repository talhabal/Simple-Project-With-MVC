<?php require_once 'views/header.php'; ?>
<div class="col-lg-12" align="center">

            <h5 ">Giriş Formu</h5>
        <div class="col-lg-12">
            <form action="<?php echo URL;?>/login/GirisKontrol" method="POST"><br>
                <input type="text" name="kadi" placeholder="Kullanıcı Adınız..."><br><br>
                <input type="password" name="sifre" placeholder="Parolanız..."><br><br>

                <input type="submit" value="Giriş Yap" class="btn btn-primary">

            </form>
        </div>
            
    </div>
    



<?php require_once 'views/footer.php';?>