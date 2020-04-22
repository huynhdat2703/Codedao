<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/codedao/Model/Post.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/codedao/Model/Category.php');

class CategoryController
{
    public function showPostByCategory($id)
    {
        $post = new Post();
        $listPostByCategory = $post->getPostByCategory($id);
        return $listPostByCategory;
    }

    public function showAllPost() {
        $post = new Post();
        $listPostByCategory = $post->getAllPost();
        return $listPostByCategory;
    }

    public function getCategoryInfo($id) {
        $category = new Category();
        $categoryInfo = $category->getCategoryByID($id);
        return $categoryInfo;
    }
}

