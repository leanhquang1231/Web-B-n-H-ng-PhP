<?php
require_once 'models/Product.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function displayProducts($search = '') {
        return $this->productModel->getProducts($search);
    }

    public function getCategories() {
        return $this->productModel->getCategories();
    }

    public function addProduct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData = [
                'tenhh' => $_POST['tenhh'],
                'maloai' => $_POST['maloai'],
                'dacbiet' => $_POST['dacbiet'],
                'soluotxem' => $_POST['soluotxem'],
                'ngaylap' => $_POST['ngaylap'],
                'mota' => $_POST['mota']
            ];

            if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == 0) {
                try {
                    $productData['hinh'] = $this->uploadImage($_FILES['hinh']);
                } catch (Exception $e) {
                    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
                    return;
                }
            }

            $result = $this->productModel->addProduct($productData);
            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Product added successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to add product']);
            }
        }
    }

    public function getProductById($mahh) {
        return $this->productModel->getProductById($mahh);
        var_dump($categories);
        return $categories;
    }

    public function updateProduct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData = [
                'mahh' => $_POST['mahh'],
                'tenhh' => $_POST['tenhh'],
                'maloai' => $_POST['maloai'],
                'dacbiet' => $_POST['dacbiet'],
                'soluotxem' => $_POST['soluotxem'],
                'ngaylap' => $_POST['ngaylap'],
                'mota' => $_POST['mota'],
                'hinh' => $_POST['existing_hinh']
            ];

            if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == 0) {
                try {
                    $productData['hinh'] = $this->uploadImage($_FILES['hinh']);
                } catch (Exception $e) {
                    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
                    return;
                }
            }

            $result = $this->productModel->updateProduct($productData);
            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Product updated successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to update product']);
            }
        }
    }

    public function deleteProduct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mahh'])) {
            $result = $this->productModel->deleteProduct($_POST['mahh']);
            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Product deleted successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to delete product']);
            }
        }
    }

    private function uploadImage($file) {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $check = getimagesize($file["tmp_name"]);
        if($check !== false) {
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                throw new Exception("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            }
            
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                return basename($file["name"]);
            } else {
                throw new Exception("Sorry, there was an error uploading your file.");
            }
        } else {
            throw new Exception("File is not an image.");
        }
    }
}