<?php
ob_start();
?>

<h1>
    <?php
    $idcat = $_GET['id'];
    $arr2 = Category::getAllCategory();
    $categories = [];
    foreach ($arr2 as $value) {
        $categories[$value['id']] = $value['name'];
    }
    echo $categories[$idcat];
    //echo $_POST[$idcat]
    ?>
</h1>

<?php
ViewProducts::ProductsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>