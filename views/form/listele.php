<?php require_once 'views/header.php'; ?>
<div class="col-lg-12">

    <table class="table table-bordered mt-2">
        <thead>
            <tr class="font-weight-bold">
                <td>#İD</td>
                <td>AD</td>
                <td>SOYAD</td>
                <td>YAŞ</td>
                <td>İŞLEM</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) {
            
            
            ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["ad"];?></td>
                <td><?php echo $row["soyad"];?></td>
                <td><?php echo $row["yas"];?></td>
                <td align="center">
                    <a href="kayitguncelle/<?php echo $row["id"];?>" class="btn btn-success">Güncelle</a>
                    <a href="kayitsil/<?php echo $row["id"];?>" class="btn btn-danger">Sil</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php require_once 'views/footer.php'; ?>