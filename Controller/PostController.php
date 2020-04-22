<?php

class PostController {
    public function getPostByID($id) {
        $post = new Post();
        $result = $post->getPostByID($id);
        return $result;
    }
}