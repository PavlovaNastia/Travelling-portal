<?php
class Category {

    public static function getAllCategory() {
        $query = "SELECT * FROM category";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getProductsByCategoryID($id) {
        $query = "SELECT * FROM products where category_id=".(string)$id." ORDER BY id DESC LIMIT 6";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

}


