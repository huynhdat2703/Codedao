<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/codedao/config/Database.php');
class Category {
    public function getCategory() {
        $db = new Database();
        $db->connectDatabase();
        $query = "select * from category";
        $result = mysqli_query($db->getConnection(),$query);
        $db->disConnectDatabase();
        return $result;
    }

    public function getCategoryByID($id) {
        $db = new Database();
        $db->connectDatabase();
        $query = "select * from category where category_id = $id";
        $result = mysqli_query($db->getConnection(),$query);
        $db->disConnectDatabase();
        return $result;
    }
}
