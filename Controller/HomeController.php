<?php
require($_SERVER['DOCUMENT_ROOT'].'/codedao/Model/Category.php');
class HomeController {
    public function getCategory() {
        $category = new Category();
        $listCategory = $category->getCategory();
        return $listCategory;
    }
}
