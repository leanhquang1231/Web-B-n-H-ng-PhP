<?php
require_once 'Database.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getProducts($search = '') {
        $query = "SELECT h.*, l.tenloai 
                  FROM hanghoa h 
                  LEFT JOIN loai l ON h.maloai = l.idloai 
                  WHERE 1";
        $params = [];

        if (!empty($search)) {
            $query .= " AND h.tenhh LIKE ?";
            $params[] = "%$search%";
        }

        $stmt = $this->db->prepare($query);
        if (!empty($params)) {
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCategories() {
        $query = "SELECT * FROM loai";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $categories = $result->fetch_all(MYSQLI_ASSOC);
        $categoriesAssoc = [];
        foreach ($categories as $category) {
            $categoriesAssoc[$category['idloai']] = $category;
        }
        return $categoriesAssoc;
    }

    public function addProduct($productData) {
        $query = "INSERT INTO hanghoa (tenhh, maloai, dacbiet, soluotxem, ngaylap, mota, hinh) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssssss", 
            $productData['tenhh'], 
            $productData['maloai'], 
            $productData['dacbiet'], 
            $productData['soluotxem'], 
            $productData['ngaylap'], 
            $productData['mota'], 
            $productData['hinh']
        );
        return $stmt->execute();
    }

    public function updateProduct($productData) {
        $query = "UPDATE hanghoa 
                  SET tenhh = ?, maloai = ?, dacbiet = ?, 
                      soluotxem = ?, ngaylap = ?, mota = ?, hinh = ? 
                  WHERE mahh = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssssssi", 
            $productData['tenhh'], 
            $productData['maloai'], 
            $productData['dacbiet'], 
            $productData['soluotxem'], 
            $productData['ngaylap'], 
            $productData['mota'], 
            $productData['hinh'],
            $productData['mahh']
        );
        return $stmt->execute();
    }

    public function deleteProduct($mahh) {
        $query = "DELETE FROM hanghoa WHERE mahh = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $mahh);
        return $stmt->execute();
    }

    public function getProductById($mahh) {
        $query = "SELECT h.*, l.tenloai 
                  FROM hanghoa h 
                  LEFT JOIN loai l ON h.maloai = l.idloai 
                  WHERE h.mahh = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $mahh);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}