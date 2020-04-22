<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/codedao/config/Database.php');
class Post {
    private $id;
    private $categoryId;
    private $title;
    private $slug;
    private $create_day;
    private $description;
    private $content;
    private $author_id;
    
    public function getPostByCategory($idCategory) {
        $database = new Database();
        $database->connectDatabase();
        $query = "select * from post, category, author where post.category_id = category.category_id and post.author_id = author.author_id and post.category_id = $idCategory";
        $result = mysqli_query($database->getConnection(), $query);
        $database->disConnectDatabase();
        return $result;
    }

    public function getAllPost() {
        $database = new Database();
        $database->connectDatabase();
        $query = "select * from post, category, author where post.category_id = category.id and post.author_id = author.id";
        $result = mysqli_query($database->getConnection(), $query);
        $database->disConnectDatabase();
        return $result;
    }

    public function getPostByID($id) {
        $database = new Database();
        $database->connectDatabase();
        $query = "select * from post, category, author where post.category_id = category.id and post.author_id = author.id and post_id = $id";
        $result = mysqli_query($database->getConnection(), $query);
        $database->disConnectDatabase();
        return $result;
    }

}