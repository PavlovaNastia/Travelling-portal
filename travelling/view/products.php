<?php
class ViewProducts {

 

    public static function ProductsByCategory ($arr) {
        echo '<div class="container">';
        echo '<div class="row">';

        foreach ($arr as $value) {
            echo '<div class="col">';
            echo '<div class="thumbnail">';
            echo '<div class="zoom">';
            echo '<img class="fish" src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=230><br>';
            echo '</div>';
            echo "<h3>".$value['title']."</h3>";
            echo '</div>';
            Controller::CommentsCount($value['id']);
            echo "<a href='products?id=".$value['id']."'>Next</a><br>";
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    public static function AllProducts ($arr) {
        foreach ($arr as $value) {
            echo "<li>".$value['title'];
            Controller::CommentsCount($value['id']);
            echo "<a class='next' href='products?id=".$value['id']."'>Next</a></li><br>";
        }
    }
    public static function ReadProducts ($n) {
        echo "<h2>".$n['title']."</h2>";
        Controller::CommentsCountWithAncor($n['id']);   
        echo '<br><img class = "zoom" src="data:image/ipeg;base64,'.base64_encode($n['picture']).'"
        width="300"><br>';   

        echo "<p><br>".$n['text']."</p>";
        }

    //Добавить методы для других видов представления Product

    }//end class
    