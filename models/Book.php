<?php
require_once 'configs/database.php';
class Book {
    public $id;
    public $name;

    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO `MONHOC` (`ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) 
        VALUES ('{$param['ten_mh']}','{$param['sotinchi']}','{$param['sotiet_lt']}','{$param['sotiet_bt']}','{$param['sotiet_thtn']}','{$param['sogio_tuhoc']}' )";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }

    public function getBookById($id = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM monhoc WHERE mamh=$id";
        $results = mysqli_query($connection, $querySelect);
        $book = [];
        if (mysqli_num_rows($results) > 0) {
            $books = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $book = $books[0];
        }
        $this->closeDb($connection);

        return $book;
    }

    /**
     * Truy vấn lấy ra tất cả sách trong CSDL
     */
    public function index() {
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM monhoc";
        $results = mysqli_query($connection, $querySelect);
        $books = [];
        if (mysqli_num_rows($results) > 0) {
            $books = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $books;
    }

    public function update($book = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE monhoc 
    SET `ten_mh` = '{$book['name']}' WHERE `mamh` = {$book['id']}
    SET `sotinchi` = '{$book['sotinchi']}' WHERE `mamh` = {$book['id']}
    SET `sotiet_lt` = '{$book['sotiet_lt']}' WHERE `mamh` = {$book['id']}
    SET `sotiet_bt` = '{$book['sotiet_bt']}' WHERE `mamh` = {$book['id']}
    SET `sotiet_thtn` = '{$book['sotiet_thtn']}' WHERE `mamh` = {$book['id']}
    SET `sogio_tuhoc` = '{$book['sogio_tuhoc']}' WHERE `mamh` = {$book['id']}
    ";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM monhoc WHERE mamh = $id";
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