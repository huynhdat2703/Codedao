<?php
// require("../Models/Category.php");
require($_SERVER['DOCUMENT_ROOT'].'/codedao/Model/Category.php');
class HomeController {
    public function getCategory() {
        $category = new Category();
        $listCategory = $category->getCategery();
        return $listCategory;
        // $listCategory = ["công nghệ","lập trình","công cụ","tài liệu"];
        // return $listCategory;
    }
}
?>