<?php require_once 'views/header.php'; ?>
<div class="col-lg-12">
    <div class="row col-lg-10">
        <div class="col-lg-5">
            <h5>Güncelleme Formu</h5>
        </div>
        <div class="col-lg-5">
            <form action="<?php echo URL;?>/Kayit/guncelleson" method="POST">
            <?php foreach ($data as $row ) { ?>
                <input type="text" name="ad" value="<?php echo $row["ad"];?>"><br>
                <input type="text" name="soyad" value="<?php echo $row["soyad"];?>"><br>
                <input type="text" name="yas" value="<?php echo $row["yas"];?>">
                <input type="hidden" name="kayitid" value="<?php echo $row["id"];?>">


                <input type="submit" value="Güncelle" class="btn btn-success">
            <?php }?>
            </form>
        </div>
            
    </div>
</div>
    



<?php require_once 'views/footer.php';?>