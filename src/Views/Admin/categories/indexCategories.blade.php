<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Danh sách danh mục</h1>
        <a href="./categories/createCategories" class="btn btn-info">Thêm mới</a>
        <div class="row">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th> Sửa - Xóa</th>
                </tr>
                @foreach ($Categories as $value)
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td>
                            <a href="./categories/<?= $value['id'] ?>/updateCategories"
                                class="btn btn-warning">Sửa</a>

                            <a href="/admin/categories/<?= $value['id'] ?>/showCategories"
                                class="btn btn-info">Show</a>

                                <a href="./categories/<?= $value['id'] ?>/deleteCategories" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa ?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
