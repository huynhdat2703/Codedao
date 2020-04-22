<?php
require($_SERVER['DOCUMENT_ROOT'].'/codedao/config/Database.php');
class Category {
    public function getCategery() {
        $db = new Database();
        $db->connectDatabase();
        $query = "select * from category";
        if($result = mysqli_query($db->getConnection(),$query)) {
            return $result;
        }
    }
}
?>