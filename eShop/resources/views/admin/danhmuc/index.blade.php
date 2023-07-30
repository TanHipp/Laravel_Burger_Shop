<x-admin-layout title="Danh sach San Pham">
    <div class="row">
        <div class="col-12">
            <h3>Trang Danh Mục</h3>
            <div class="table-responsive">
                <a href="{{ route('admin.danhmuc.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle-fill"></i>
                    Thêm Danh Mục Tại Đây
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh muc</th>
                            <th>Ngày Tạo</th>
                            <th>Ngày cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <td>{{ $item->id }}</td>

                            <td>{{ $item->ten_danh_muc }}</td>

                            <td>{{ $item->created_at->format('d/m/Y') }}</td>

                            <td>{{ $item->updated_at->format('d/m/Y') }}</td>

                            <td>
                                <a href="{{ route('admin.danhmuc.edit', ['id' => $item->id]) }}"
                                    class="btn btn-secondary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin.danhmuc.destroy', ['id' => $item->id]) }}" method="post"
                                    class="d-inline">
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
                {{ $data->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
