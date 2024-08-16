<?php
require_once 'connect.php';

class hanghoa
{
    // Thuộc tính
    // Phương thức lấy ra 8 sản phẩm mới nhất 
    function getHangHoa()
    {
        $db = new connect();
        $select = "select * from hanghoa";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaNew()
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, b.hinh, b.dongia, a.soluotxem 
                   from hanghoa a, cthanghoa b 
                   where a.mahh = b.idhanghoa 
                   order by a.mahh DESC 
                   limit 2";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaSale()
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, b.hinh, a.soluotxem, b.giamgia, b.dongia 
                   from hanghoa a, cthanghoa b 
                   where a.mahh = b.idhanghoa AND b.giamgia != 0 
                   order by a.mahh desc 
                   limit 4";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAll()
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, a.soluotxem, b.dongia, b.hinh 
                   from hanghoa a, cthanghoa b 
                   where a.mahh = b.idhanghoa 
                   order by a.mahh desc";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select distinct a.mahh, a.tenhh, a.mota, b.dongia 
                   from hanghoa a, cthanghoa b 
                   where a.mahh = b.idhanghoa and a.mahh = $id";
        $result = $db->getInstance($select);
        return $result;
    }

    function getHangHoaHinh($id)
    {
        $db = new connect();
        $select = "select a.hinh 
                   from cthanghoa a 
                   where a.idhanghoa = $id";
        $result = $db->getInstance($select);
        return $result;
    }

    function getHangHoaAllPage($start, $limit)
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, a.soluotxem, b.dongia, b.hinh 
                   from hanghoa a, cthanghoa b 
                   where a.mahh = b.idhanghoa 
                   order by a.mahh desc 
                   limit $start, $limit";
        $result = $db->getList($select);
        return $result;
    }
}
