<?php


class blogInfo{
    public $db;

    public function __construct(){
        include_once "connection.php";
        $this->db = new Database();
    }


    # all post With Cat
    public function allpostWithCat(){
        $sql = "SELECT blog_post.*, blog_category.* FROM blog_category
                INNER JOIN blog_post ON blog_post.cat_id = blog_category.c_id
                ";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    # select all post
    public function allpost(){
        $sql = "SELECT * FROM blog_post";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    # select all category
    public function allcategory(){
        $sql = "SELECT * FROM blog_category";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    // select Post post-id
    public function getPostById($id){
        $sql = "SELECT blog_post.*, blog_category.* FROM blog_post
                INNER JOIN blog_category ON blog_post.cat_id = blog_category.c_id
                WHERE blog_post.id=:id
                ";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    # select post/details by id
    public function getAllPostByCatId($cat_slug, $contentID=NULL){
        $sql ="SELECT blog_category.cat_name, blog_post.*  FROM blog_category 
                INNER JOIN blog_post ON blog_post.cat_id = blog_category.c_id
                WHERE blog_category.cat_slug=:cat_slug";
        $sql .= $contentID > 0 ? " AND blog_post.id <> :id" : '';
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':cat_slug', $cat_slug);
        if($contentID > 0) $query->bindParam(':id', $contentID);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }


    # get category name by category id
    public function getCategoryNameByCatId($id){
        $sql = "SELECT cat_name FROM blog_category WHERE cat_slug = :id";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
}
?>