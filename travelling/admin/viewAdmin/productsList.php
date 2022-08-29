<?php ob_start() ?>

<!--
    <h2 style="color: #007bff;">ProductList</h2>
-->
<h2>Products List</h2>

<div class="container" style="min-height: 400px;">
    <div style="margin: 20px;">
        <a class="btn btn-primary" href="productsAdd" role="button" style="background-color: #007bff;">Add product</a>
    </div>
    <div class="col-md-11">
        <table class="table table-bordered table-responsive">
            <tr>
                <th width="10%">ID</th>
                <th width="70%">Header Products</th>
                <th width="20%"></th>
            </tr>
        <?php

        foreach($arr as $row) {
            echo '<tr>';

                echo '<td>'.$row['id'].'</td>   ';

                echo '<td><b>Title:</b> '.$row['title'].'<br>';
                echo '<b>Category: </b><i>'.$row['name'].'</i>';
                echo '<br><b>Author: </b><i>'.$row['username'].'</i>';
                echo '</td>';
                echo '<td>
                <a href="productsEdit?id='.$row['id'].'">Edit <span class="gliphicon 
                gliphicon-edit" aria-hidden = "true"></span></a>
                <a href="productsDel?id='.$row['id'].'">Delete <span class="gliphicon 
                gliphicon-remove" aria-hidden = "true"></span></a>
                </td>  ';

            echo '</tr>';
        }
        ?>
        </table>
    </div>    
</div>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>