<?php

class Category
{
    public $conn;
    public function __construct()
    {
        session_start();
        $dbUserName = 'root';
        $dbPassword='root'; 
        $dbName='php_b8';

        try{
            $this->conn = new PDO ('mysql:host=localhost;dbname='.$dbName , $dbUserName , $dbPassword );
        }catch(PDOException $e){
                echo 'Database Connection Failed';
                die();
        }

        
    }

    public function createCategory($data)
    {
      
        try {
            $_SESSION['old'] = $data;



            if (empty($data['category_name'])) {
                $_SESSION['errors']['category_name'] = 'Required';
            } 


            if (isset($_SESSION['errors'])) {
              
                return false;
            }
            // print_r($_SESSION['old']['category_name']);
            // exit();

            // todo database insert

            $sql="INSERT INTO categories (category_name, description) VALUES (:c_name, :c_description) ";
            $saveCategory= $this->conn->prepare($sql);
            $saveCategory->execute([
                'c_name' => $data['category_name'],
                'c_description' => $data['category_discription']
            ]);


            //session
            unset($_SESSION['old']);
            $_SESSION['message'] = 'Successfully Created';
            return true;
        } catch (Exception $th) {
            $_SESSION['errors']['sqlError'] = $th->getMessage();
        }

        
    

    }

    public function viewCategory()
    {
        $sql="SELECT * FROM categories ";
        $category= $this->conn->query($sql);
        $data=$category->fetchAll(PDO::FETCH_ASSOC);
        // echo ("<pre>");
        // print_r($data);
        // die();
        return $data;
    }

    public function editCategory($id)
    {

        $sql="SELECT * FROM categories WHERE id=$id ";
        $category= $this->conn->query($sql);
        $data=$category->fetch(PDO::FETCH_ASSOC);
        
        return $data;

    }
    public function updateCategory($data)
    {
        
        $id= $_GET['id'];

        $sql="UPDATE categories SET category_name=:c_name, description=:c_description WHERE id=:id";
        $saveCategory= $this->conn->prepare($sql);
        $saveCategory->execute([
            'c_name' => $data['category_name'],
            'c_description' => $data['category_discription'],
            'id' => $id
        ]);
    }
    public function deleteCategory(int $id)
    {
      
        $delete = $this->conn->prepare("DELETE FROM  categories where id=:c_id");
        $delete->execute([
            'c_id' => $id
        ]);
    }
}

?>
