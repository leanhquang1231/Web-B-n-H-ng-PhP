<?php
class Cart {
    function addToCart($mahh, $soluong, $dongia) {
        $sp = new Hanghoa();
        $idsp = $sp->getHangHoaHinh($mahh);
        $hang = $sp->getHangHoaId($mahh);
        $img = $idsp['hinh'];
        $tensp = $hang['tenhh'];
        $tong = intval($soluong) * floatval($dongia);

        $item = array(
            'mahh' => $mahh,
            'hinh' => $img,
            'name' => $tensp,
            'soluong' => $soluong,
            'total' => $tong,
            'dongia' => $dongia,
        );

        $position = $this->findProductPosition($mahh);

        if ($position !== false) {
            $_SESSION['cart'][$position]['soluong'] += $soluong;
            $_SESSION['cart'][$position]['total'] = $_SESSION['cart'][$position]['soluong'] * $_SESSION['cart'][$position]['dongia'];
        } else {
            $_SESSION['cart'][] = $item;
        }

        return $this->getTotalItems();
    }

    private function findProductPosition($mahh) {
        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            return false;
        }

        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $mahh) {
                return $key;
            }
        }

        return false;
    }

    function sub_Total() {
        $subtotal = 0;
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $subtotal += $item['total'];
            }
        }
        return number_format($subtotal, 2);
    }

    function calculateItemTotal($mahh) {
        $total = 0;
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                if ($item['mahh'] == $mahh) {
                    $total = $item['soluong'] * $item['dongia'];
                    return number_format($total, 2);
                }
            }
        }
        return number_format($total, 2);
    }

    function removeFromCart($mahh) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['mahh'] == $mahh) {
                    unset($_SESSION['cart'][$key]);
                    break;
                }
            }
        }
    }

    function getTotalItems() {
        $totalItems = 0;
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $totalItems += $item['soluong'];
            }
        }
        return $totalItems;
    }

    function updateQuantity($mahh, $newQuantity) {
        $position = $this->findProductPosition($mahh);
        if ($position !== false) {
            $_SESSION['cart'][$position]['soluong'] = $newQuantity;
            $_SESSION['cart'][$position]['total'] = $newQuantity * $_SESSION['cart'][$position]['dongia'];
        }
    }
}
?>
