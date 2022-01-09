<?php
require_once 'database/database.php';
class docgia {
    public $id;
    public $name;

    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO tb_docgia(`madg`, `hovaten`,`gioitinh`,`namsinh`,`nghenghiep`,`ngaycapthe`,`ngayhethan`,`diachi`) 
        VALUES ('{$param[`madg`, `hovaten`,`gioitinh`,`namsinh`,`nghenghiep`,`ngaycapthe`,`ngayhethan`,`diachi`]}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }

    

     
    
    public function index() {
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM tb_docgia";
        $results = mysqli_query($connection, $querySelect);
        $docgia = [];
        if (mysqli_num_rows($results) > 0) {
            $docgia = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $docgia;
    }

    public function update($docgia = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE docgia 
    SET `name` = '{$docgia['name']}' WHERE `id` = {$docgia['id']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM docgia WHERE id = $id";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}