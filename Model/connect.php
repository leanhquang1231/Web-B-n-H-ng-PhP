<?php
class connect
{
    // thuộc tính
    var $db = null;

    // hàm tạo 
    function __construct()
    {
        // database
        $dsn = 'mysql:host=localhost;port=3305;dbname=mixue';
        $user = 'root';
        $pass = ''; // Update this with your actual MySQL root password if any

        // tạo sự kết nối bằng PDO
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
        } catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }
    }

    // phương thức lấy về nhiều dữ liệu tức là nhiều row, là 1 table 
    function getList($select)
    {
        // truy vấn thì trả về 1 table nhiều row, thì cần một biến chứa 
        if ($this->db) {
            $result = $this->db->query($select);
            return $result; // trả về 1 table
        }
        return null;
    }

    // phương thức lấy về chỉ 1 row
    function getInstance($select)
    {
        // truy vấn thì trả về là 1 table nhiều row, thì cần 1 biến chứa 
        if ($this->db) {
            $result = $this->db->query($select);
            // trả về 1 dòng thì fetch luôn để lấy kết quả 
            $result = $result->fetch();
            return $result;
        }
        return null;
    }

    // truy vấn bằng insert, update, delete => exec
    function exec($query)
    {
        if ($this->db) {
            $result = $this->db->exec($query);
            return $result;
        }
        return null;
    }

    // prepare
    function execP($query)
    {
        if ($this->db) {
            $statement = $this->db->prepare($query);
            return $statement;
        }
        return null;
    }

    // bắt đầu transaction
    function beginTransaction()
    {
        if ($this->db) {
            return $this->db->beginTransaction();
        }
        return false;
    }

    // commit transaction
    function commit()
    {
        if ($this->db) {
            return $this->db->commit();
        }
        return false;
    }

    // rollback transaction
    function rollback()
    {
        if ($this->db) {
            return $this->db->rollback();
        }
        return false;
    }

    // phương thức lấy ID của bản ghi vừa được chèn vào
    function getLastInsertId()
    {
        if ($this->db) {
            return $this->db->lastInsertId();
        }
        return null;
    }
}
?>