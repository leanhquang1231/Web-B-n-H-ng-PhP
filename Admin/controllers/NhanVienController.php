<?php
require_once __DIR__ . '/../models/NhanVien.php'; // Đường dẫn chính xác đến NhanVien.php

class NhanVienController {
    private $nhanVienModel;

    public function __construct() {
        $this->nhanVienModel = new NhanVien();
    }

    public function getNhanViens() {
        return $this->nhanVienModel->getAll();
    }

    public function getNhanVien($id) {
        return $this->nhanVienModel->getById($id);
    }

    public function addNhanVien($data) {
        $this->nhanVienModel->create($data);
    }

    public function updateNhanVien($id, $data) {
        $this->nhanVienModel->update($id, $data);
    }

    public function deleteNhanVien($id) {
        $this->nhanVienModel->delete($id);
    }
}
?>
