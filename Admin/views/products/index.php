<?php
require_once 'controllers/ProductController.php';
$productController = new ProductController();

$search = $_GET['search'] ?? '';
$products = $productController->displayProducts($search);
$categories = $productController->getCategories();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Quản lý sản phẩm</h2>

    <!-- Form tìm kiếm -->
    <form method="GET" action="" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm sản phẩm" value="<?php echo htmlspecialchars($search); ?>">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary">Tìm kiếm</button>
            </div>
        </div>
    </form>

    <!-- Nút thêm sản phẩm mới -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProductModal">
        Thêm sản phẩm mới
    </button>

    <!-- Bảng hiển thị sản phẩm -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mã HH</th>
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đặc biệt</th>
                <th>Số lượt xem</th>
                <th>Ngày lập</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody id="productTableBody">
            <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['mahh']); ?></td>
                    <td><?php echo htmlspecialchars($product['tenhh']); ?></td>
                    <td><?php echo htmlspecialchars($product['tenloai']); ?></td>
                    <td><img src="../uploads/<?php echo htmlspecialchars($product['hinh']); ?>" alt="<?php echo htmlspecialchars($product['tenhh']); ?>" width="50"></td>
                    <td><?php echo $product['dacbiet'] ? 'Có' : 'Không'; ?></td>
                    <td><?php echo htmlspecialchars($product['soluotxem']); ?></td>
                    <td><?php echo htmlspecialchars($product['ngaylap']); ?></td>
                    <td>
                        <button class="btn btn-sm btn-info edit-product" data-id="<?php echo $product['mahh']; ?>" data-toggle="modal" data-target="#editProductModal">Sửa</button>
                        <button class="btn btn-sm btn-danger delete-product" data-id="<?php echo $product['mahh']; ?>" data-toggle="modal" data-target="#deleteProductModal">Xóa</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="text-center">Không có sản phẩm nào</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Modal thêm sản phẩm -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="addProductForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Thêm sản phẩm mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tenhh">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="tenhh" name="tenhh" required>
                    </div>
                    <div class="form-group">
    <label for="maloai">Loại sản phẩm</label>
    <select class="form-control" id="maloai" name="maloai" required>
        <?php foreach ($categories as $category): ?>
            <?php echo isset($category['tenloai']) ? htmlspecialchars($category['tenloai']) : ''; ?>
        <?php endforeach; ?>
    </select>
</div>
<?php
var_dump($categories);
if (empty($categories)) {
    echo "Không có dữ liệu loại sản phẩm";
}
?>
                    <div class="form-group">
                        <label for="dacbiet">Đặc biệt</label>
                        <select class="form-control" id="dacbiet" name="dacbiet" required>
                            <option value="1">Có</option>
                            <option value="0">Không</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="soluotxem">Số lượt xem</label>
                        <input type="number" class="form-control" id="soluotxem" name="soluotxem" required>
                    </div>
                    <div class="form-group">
                        <label for="ngaylap">Ngày lập</label>
                        <input type="date" class="form-control" id="ngaylap" name="ngaylap" required>
                    </div>
                    <div class="form-group">
                        <label for="mota">Mô tả</label>
                        <textarea class="form-control" id="mota" name="mota" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hinh">Hình ảnh</label>
                        <input type="file" class="form-control" id="hinh" name="hinh">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal sửa sản phẩm -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="editProductForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Sửa sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_mahh" name="mahh">
                    <div class="form-group">
                        <label for="edit_tenhh">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="edit_tenhh" name="tenhh" required>
                    </div>
                    <div class="form-group">
    <label for="edit_maloai">Loại sản phẩm</label>
    <select class="form-control" id="edit_maloai" name="maloai" required>
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo htmlspecialchars($category['maloai']); ?>"><?php echo htmlspecialchars($category['tenloai']); ?></option>
        <?php endforeach; ?>
    </select>
</div>
                    <div class="form-group">
                        <label for="edit_dacbiet">Đặc biệt</label>
                        <select class="form-control" id="edit_dacbiet" name="dacbiet" required>
                            <option value="1">Có</option>
                            <option value="0">Không</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_soluotxem">Số lượt xem</label>
                        <input type="number" class="form-control" id="edit_soluotxem" name="soluotxem" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_ngaylap">Ngày lập</label>
                        <input type="date" class="form-control" id="edit_ngaylap" name="ngaylap" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_mota">Mô tả</label>
                        <textarea class="form-control" id="edit_mota" name="mota" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_hinh">Hình ảnh</label>
                        <input type="file" class="form-control" id="edit_hinh" name="hinh">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal xóa sản phẩm -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="deleteProductForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProductModalLabel">Xóa sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa sản phẩm này?</p>
                    <input type="hidden" id="delete_mahh" name="mahh">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-danger">Xóa sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    // Thêm sản phẩm
    $('#addProductForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'add_product.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#addProductModal').modal('hide');
                alert('Sản phẩm đã được thêm thành công');
                location.reload();
            },
            error: function() {
                alert('Có lỗi xảy ra khi thêm sản phẩm');
            }
        });
    });

    // Lấy thông tin sản phẩm để sửa
    $('.edit-product').click(function() {
        var mahh = $(this).data('id');
        $.ajax({
            url: 'get_product.php',
            type: 'GET',
            data: { mahh: mahh },
            success: function(response) {
                var product = JSON.parse(response);
                $('#edit_mahh').val(product.mahh);
                $('#edit_tenhh').val(product.tenhh);
                $('#edit_maloai').val(product.maloai);
                $('#edit_dacbiet').val(product.dacbiet);
                $('#edit_soluotxem').val(product.soluotxem);
                $('#edit_ngaylap').val(product.ngaylap);
                $('#edit_mota').val(product.mota);
            },
            error: function() {
                alert('Có lỗi xảy ra khi lấy thông tin sản phẩm');
            }
        });
    });

    // Cập nhật sản phẩm
    $('#editProductForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'update_product.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#editProductModal').modal('hide');
                alert('Sản phẩm đã được cập nhật thành công');
                location.reload();
            },
            error: function() {
                alert('Có lỗi xảy ra khi cập nhật sản phẩm');
            }
        });
    });

   // Xóa sản phẩm
   $('.delete-product').click(function() {
        var mahh = $(this).data('id');
        $('#delete_mahh').val(mahh);
    });

    $('#deleteProductForm').submit(function(e) {
        e.preventDefault();
        var mahh = $('#delete_mahh').val();
        $.ajax({
            url: 'delete_product.php',
            type: 'POST',
            data: { mahh: mahh },
            success: function(response) {
                $('#deleteProductModal').modal('hide');
                alert('Sản phẩm đã được xóa thành công');
                location.reload();
            },
            error: function() {
                alert('Có lỗi xảy ra khi xóa sản phẩm');
            }
        });
    });
});
</script>
</body>
</html>