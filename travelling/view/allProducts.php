<?php
ob_start();
?>

        <h1>All countries</h1>


<?php
ViewProducts::AllProducts($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>