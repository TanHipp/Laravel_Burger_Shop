<x-admin-layout title="">
    <div class="row">
        <div class="col-12">
            <h2>Trang Thêm Mới Danh Mục</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('admin.danhmuc.upsert', ['id' => $data->id]) }}" method="POST">

                @csrf {{-- Add this line to prevent 419 error --}}
                @include('includes.errors')

                <div class="mt-3">
                    <label for="form-laybel">Tên Danh Mục</label>
                    <input type="text" class="form-control" name="ten_danh_muc" value="{{ $data->ten_danh_muc }}">
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Cập Nhật" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
