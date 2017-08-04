<?php


class blogInfo{
    public $db;

    public function __construct(){
        include_once "connection.php";
        $this->db = new Database();
    }


    # all post With Cat
    public function allpostWithCat($keyword=NULL){
        $sql = "SELECT blog_post.*, blog_category.* FROM blog_category
                INNER JOIN blog_post ON blog_post.cat_id = blog_category.c_id
                WHERE 
                    post_name LIKE '%$keyword%' 
                    OR post_brief LIKE '%$keyword%' 
                    OR post_details LIKE '%$keyword%' 
                    OR author LIKE '%$keyword%'";
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
                WHERE blog_category.cat_slug=:cat_slug ";
        $sql .= $contentID > 0 ? " AND blog_post.id <> :id" : '' ;
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':cat_slug', $cat_slug);
        if($contentID > 0) $query->bindParam(':id', $contentID);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }


    # get category name by category id
    public function getCategoryNameByCatId($id){
        $sql = "SELECT cat_name, cat_slug FROM blog_category WHERE cat_slug = :id";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }


    # search query
    public function searchQuery($keyword){
        $sql = "SELECT * FROM blog_post 
                    WHERE 
                    post_name LIKE '%$keyword%' 
                    OR post_brief LIKE '%$keyword%' 
                    OR post_details LIKE '%$keyword%' 
                    OR author LIKE '%$keyword%'";
        $query = $this->db->pdo->prepare($sql);
        //$query->bindParam(':keyword', $keyword);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    #abaler sonkha update
    public function abalerSonkharUpdate(){
        $sql = "UPDATE blog_abal_hit SET abaler_sonkha = abaler_sonkha + 1 WHERE id=1";
        $query = $this->db->pdo->prepare($sql);
        $result = $query->execute();
        return $result;
    }

    #abaler sonkha nirnoy
    public function abalerSonkharNirnoy(){
        $sql = "SELECT abaler_sonkha FROM blog_abal_hit WHERE id=1";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
}
?>