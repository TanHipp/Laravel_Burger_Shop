<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $attributes['title'] ?? 'Quan Li San Pham' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{ $css ?? '' }}
    <style>
        /* Custom CSS */
        /* Update page title style */
        .page-title {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Style the "Thêm sản phẩm" button */
        .btn-add-product {
            margin-bottom: 10px;
        }

        /* Style the product images */
        .product-image {
            max-width: 100px;
            max-height: 100px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Style the table rows */
        .table tbody tr:hover {
            background-color: #f7f7f7;
        }

        /* Style the edit and delete buttons */
        .btn-edit,
        .btn-delete {
            margin-right: 5px;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }

        /* Style the pagination links */
        .pagination-links {
            margin-top: 20px;
        }

        /* Update table styles */
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: center;
        }

        /* Style table header */
        .table thead th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        /* Style the "Thêm mới sản phẩm" form */
        .product-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .product-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .product-form input[type="text"],
        .product-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .product-form button[type="submit"] {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
        }

        .product-form button[type="submit"]:hover {
            opacity: 0.8;
        }

        /* Additional Styles */
        /* Highlight table header and center align table data */
        .table th {
            vertical-align: middle;
            background-color: #f8f9fa;
        }

        .table td {
            vertical-align: middle;
        }

        /* Add box shadow to buttons on hover */
        .btn-edit:hover,
        .btn-delete:hover {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Style pagination links */
        .pagination-links {
            text-align: center;
        }

        .pagination-links .page-item .page-link {
            color: #007bff;
            border-radius: 4px;
            font-weight: bold;
        }

        .pagination-links .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        /* Add padding and margin to the table */
        .table-responsive {
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            background-color: #fff;
            overflow-x: auto;
        }

        /* Center align the "Thêm sản phẩm" button */
        .btn-add-product {
            display: block;
            margin: 0 auto;
        }

        /* Style the product description */
        .table td:nth-child(5) {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Style the delete confirmation modal */
        .modal-dialog {
            max-width: 400px;
        }

        .modal-content {
            border-radius: 4px;
        }

        .modal-title {
            font-size: 18px;
            font-weight: bold;
        }

        .modal-body {
            font-size: 16px;
        }

        .modal-footer {
            justify-content: center;
        }

        /* Style the delete confirmation modal buttons */
        .modal-footer button {
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: bold;
        }

        .modal-footer button.btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .modal-footer button.btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .modal-footer button.btn-secondary:hover,
        .modal-footer button.btn-danger:hover {
            opacity: 0.8;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .table-responsive {
                box-shadow: none;
                overflow-x: auto;
            }

            .table td,
            .table th {
                padding: 8px;
            }

            .product-form {
                padding: 15px;
            }

            .modal-dialog {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <x-admin-layout title="Danh sách Sản Phẩm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-title">Danh sách Sản Phẩm</h3>
                    <div id="searchResultMessage"></div>
                    <div id="searchResultMessage"></div>

                    <div class="table-responsive">
                        @if (isset($message))
                            <div class="alert alert-danger">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <!-- Thêm input tìm kiếm -->
                        <div class="row">
                            <div class="col-md-6">
                                <form class="form-inline mt-2 mt-md-0" id="searchForm">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập ID sản phẩm"
                                        aria-label="Search" id="searchInput">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                                        kiếm</button>
                                </form>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('admin.sanpham.create') }}" class="btn btn-primary btn-add-product">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    Thêm sản phẩm
                                </a>
                            </div>
                        </div>
                        <!-- Kết thúc phần tìm kiếm -->

                        <table class="table table-hover table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th class="text-center">Giá</th>
                                    <th>Mô tả</th>
                                    <th class="text-center">Danh Mục</th>
                                    <th class="text-center">Ngày Tạo</th>
                                    <th class="text-center">Ngày Cập Nhật</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->isEmpty())
                                    <tr>
                                        <td colspan="9" class="text-center">No data found.</td>
                                    </tr>
                                @else
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">{{ $item->id }}</td>
                                            <td class="text-center">
                                                <img src="{{ $item->anh_bia }}" alt="Ảnh sản phẩm"
                                                    class="product-image">
                                            </td>
                                            <td>{{ $item->Ten_San_Pham }}</td>
                                            <td class="text-right">{{ number_format($item->Gia, 0, ',', '.') }} VNĐ</td>
                                            <td>{{ $item->Mo_Ta }}</td>
                                            <td class="text-center">
                                                {{ $item->danh_mucs->ten_danh_muc ?? 'Không có danh mục' }}</td>
                                            <td class="text-center">{{ $item->created_at->format('d/m/Y') }}</td>
                                            <td class="text-center">{{ $item->updated_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.sanpham.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-secondary">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.sanpham.destroy', ['id' => $item->id]) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <!-- Display pagination links -->
                        <div class="pagination-links">
                            @if (!$data->isEmpty())
                                {{ $data->links() }}
                            @endif
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa sản phẩm này không?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <form id="deleteForm" method="post" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Các đoạn mã JavaScript của bạn sẽ được đặt ở đây -->
    <script>
        $(document).ready(function() {
            $('#searchForm').on('submit', function(e) {
                e.preventDefault();
                var id = $('#searchInput').val();
                if (id.trim() === '') {
                    // Nếu không nhập ID, hiển thị lại toàn bộ sản phẩm
                    window.location.href = '{{ route('admin.sanpham.index') }}';
                } else {
                    // Nếu có nhập ID, tạo URL mới để tìm kiếm theo ID
                    window.location.href = '{{ route('product.search') }}?id=' + id;
                }
            });

            // Xử lý khi trang tải xong
            $(window).on('load', function() {
                // Kiểm tra nếu có tham số id trong URL
                var urlParams = new URLSearchParams(window.location.search);
                var idParam = urlParams.get('id');
                if (idParam !== null && idParam.trim() !== '') {
                    // Có tham số id, đưa giá trị tìm kiếm lên đầu ô nhập liệu
                    $('#searchInput').val(idParam);
                    // Hiển thị thông báo
                    $('#searchResultMessage').html(
                        '<div class="alert alert-success">Tìm thấy sản phẩm với ID: ' + idParam +
                        '</div>');
                } else {
                    // Không có tham số id, hiển thị thông báo
                    $('#searchResultMessage').html(
                        '<div class="alert alert-danger">Không tìm thấy sản phẩm với ID đã nhập.</div>');
                }
            });
        });
    </script>
    {{ $js ?? '' }}
</body>

</html>
