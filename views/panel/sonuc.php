<?php require_once 'views/header.php'; ?>
<div class="col-lg-12" align="center">
    
<?php 
if (is_array($data)) {
    echo "<div class='alert alert-danger mt-5'>";
    foreach ($data as $value) {
        echo $value."<br>";
    }
}
else {
    echo $data; 
}
echo $yonlen; ?>


</div>
    
<?php require_once 'views/footer.php';?>