<?php 
class user {
    private $db;

    public function __construct() {
        $this->db = new connect();
    }

    //phương thức insert vào database
    function insertKhachHang($tenkh, $username, $matkhau, $email, $diachi, $sodt)
    {
        $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai)
                  VALUES (NULL, :tenkh, :username, :matkhau, :email, :diachi, :sodt)";
        $statement = $this->db->execP($query);
        $statement->bindParam(':tenkh', $tenkh);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':matkhau', $matkhau);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':diachi', $diachi);
        $statement->bindParam(':sodt', $sodt);
        return $statement->execute();
    }

    // kiểm tra
    function checkKhachHang($user, $email)
    {
        $query = "SELECT * FROM khachhang WHERE username = :user OR email = :email";
        $statement = $this->db->execP($query);
        $statement->bindParam(':user', $user);
        $statement->bindParam(':email', $email);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function logKhachhang($user, $pass)
    {
        $query = "SELECT * FROM khachhang WHERE username = :user AND matkhau = :pass";
        $statement = $this->db->execP($query);
        $statement->bindParam(':user', $user);
        $statement->bindParam(':pass', $pass);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
?>