<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Tin Tức - TLU News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">TLU News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=admin&action=manageNews">Quản lý tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="?controller=admin&action=logout">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3>Sửa Tin Tức</h3>
        <form method="POST" action="?controller=admin&action=editNews&id=<?php echo $news['id']; ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" name="title" class="form-control" id="title" value="<?php echo $news['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="content" class="form-control" id="content" rows="5" required><?php echo $news['content']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                <input type="file" name="image" class="form-control" id="image">
                <small class="form-text text-muted">Chọn hình ảnh mới nếu bạn muốn thay đổi.</small>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Danh mục</label>
                <select name="category_id" class="form-select" id="category_id" required>
                    <!-- Lặp qua các danh mục có trong cơ sở dữ liệu -->
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['id']; ?>" <?php echo $category['id'] == $news['category_id'] ? 'selected' : ''; ?>>
                            <?php echo $category['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Cập nhật Tin Tức</button>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
