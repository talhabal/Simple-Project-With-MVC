<?php require_once 'views/header.php'; ?>
<div class="col-lg-12">
    <h5 align="center">Panele Hoş Geldiniz...</h5>
<?php 
if (is_array($data)) {
    echo "<div class='alert alert-danger mt-5'>";
    foreach ($data as $value) {
        echo $value."<br>";
    }
}
?>


</div>



<?php require_once 'views/footer.php';?>