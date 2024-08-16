<?php 
    class menu {
        function getHangMenu()
        {
            //b1: kết nối được với csdl 
            $db=new connect();
            //b2: cần lấy cái gì thì truy vấn cái đó 
            $select="     SELECT `idcate`, `namecate` FROM `danhmucsanpham` WHERE 1";
            $result=$db->getList($select);
            return $result;//đã lấy được dữ liệu về
        }
   
    }
?>