<?php
include_once "connection.php";
include_once "session.php";
date_default_timezone_set("Asia/Dhaka");

class blogInfo{
    public $db;
    public $helper;


    public function __construct(){

        $this->db = new Database();
        $this->helper = new helperClass();
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
        $sql = "SELECT * FROM blog_category ORDER BY c_id DESC";
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


    # get category by category id
    public function getCategoryByCatId($id){
        $sql = "SELECT * FROM blog_category WHERE c_id = :id";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }


    # check cateory existance
    public function categoryCheck($name){
        $sql = "SELECT cat_name FROM blog_category WHERE cat_name = :cat_name";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':cat_name', $name);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }


    # insert category
    public function insertCategory($data){
        if (!empty($data['cat_name'])){
            $catName = $data['cat_name'];
        }
        if (!empty($data['cat_slug'])){
            $catSlug = $data['cat_slug'];
        }
        $chk_category_name    = $this->categoryCheck($catName);
        if($chk_category_name == true){
            Session::set("catExistMsg", '<strong>Warning! </strong>Category Already Exists.');
        }
        else{
            $createdAt	= date('Y-m-d H:i:s');
            $sql = "INSERT INTO blog_category (cat_name,cat_slug,created_at)VALUES (:cat_name,:cat_slug,:created_at)";
            $query = $this->db->pdo->prepare($sql);
            $query->bindParam(':cat_name', $catName);
            $query->bindParam(':cat_slug', $catSlug);
            $query->bindParam(':created_at', $createdAt);
            $result = $query->execute();
            if ($result){
                Session::set("catInsertMsg", '<strong>Successfully! </strong>Category Inserted.');
                return $result;
            }
        }
    }


    # update category
    public function updateCategoryByCatId($data, $catId){
        $catName    = $data['cat_name'];
        $catSlug    = $data['cat_slug'];
        $updated_at	= date('Y-m-d H:i:s');
        $status     = $data['status'];

        $sql = "UPDATE blog_category SET
                    cat_name    = :cat_name,
                    cat_slug    = :cat_slug,
                    updated_at  = :updated_at,
                    status      = :status
                WHERE c_id = :id";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':cat_name', $catName);
        $query->bindParam(':cat_slug', $catSlug);
        $query->bindParam(':updated_at', $updated_at);
        $query->bindParam(':status', $status);
        $query->bindParam(':id', $catId);
        $result = $query->execute();
        if ($result){
            Session::set("updatemsg", '<strong>Successfully! </strong>Category Information Updated.');
            //return $result;
            header("Location: category.php");
        }
    }


    # get subcategory with category
    public function getSubcategoryWIthCategory(){
        $sql ="SELECT blog_sub_category.*, blog_category.cat_name 
                FROM blog_sub_category
                INNER JOIN blog_category
                ON blog_category.c_id = blog_sub_category.cat_id";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
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


    # select all post with sub cat
    public function getPostWithSubCatByPostId(){

    }


    # get subcat by category id
    public function allSubcatBYcatId($id){
        $sql = "SELECT * FROM blog_sub_category WHERE cat_id=:id";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    # Get Login data
    public function get_login_check($user_name, $password){
        $sql ="SELECT * FROM blog_user WHERE user_name = :user_name AND password = :user_password LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(":user_name", $user_name);
        $query->bindValue(":user_password", md5($password));
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }


    # Login statement
    public function loginStatement($data){
        $user_name = $this->helper->validation($data['user_name']);
        $password = $this->helper->validation($data['user_password']);
        if($user_name == ""){
            $msg['user_name'] = '<p style="color:red;">Error! User Name must not be empty.</p>';
        }
        if($password == ""){
            $msg['user_password'] = '<p style="color:red;">Error! Password must not be empty</p>';
        }
        if(!empty($msg)){
            return $msg;
        }
        $result = $this->get_login_check($user_name, $password);
        if($result){
            Session::init();
            Session::set("login", true);
            Session::set("user_name", $result->user_name);
            Session::set("loginmsg", '<strong>Success! </strong>You are Logged In.');
            header ("Location: index.php");
        }
        else{
            $msg = '<p class="text-danger"><strong>Error! </strong>Data Not Found!</p>';
            return $msg;
        }
    }


    # contact form message
    public function msgSent($data){
        $error = array();
        if(!empty($data['first_name'])){
            $firstName = $data['first_name'];
        } else{$error['err_first_name'] = "First Name cannot be empty!";}

        if(!empty($data['last_name'])){
            $lastName = $data['last_name'];
        }else{$error['err_last_name'] = "Last Name cannot be empty!";}

        if(!empty($data['email_address'])){
            $emailAddress = $data['email_address'];
        }else{$error['err_email_address'] = "Email cannot be empty!";}

        if(!empty($data['message'])){
            $message = $data['message'];
        }else{$error['err_message'] = "Message cannot be empty!";}

        $createdAt = date('Y-m-d H:i:s');

        if(empty($error)){
            $sql = "INSERT INTO blog_contact(first_name, last_name, email, message, created_at) VALUES(:first_name, :last_name, :email, :message, :created_at)";
            $query = $this->db->pdo->prepare($sql);
            $query->bindParam(':first_name', $firstName);
            $query->bindParam(':last_name',$lastName );
            $query->bindParam(':email', $emailAddress);
            $query->bindParam(':message', $message);
            $query->bindParam(':created_at', $createdAt);

            $result = $query->execute();
            if ($result){
                Session::set("MsgSubmit", "<strong>Successfully! </strong>Message sent.");
                return $result;
            }
        }
        else{
            return $error;
        }

    }

    # get all contact form message
    public function msgShow(){
        $sql = "SELECT * FROM blog_contact";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>






