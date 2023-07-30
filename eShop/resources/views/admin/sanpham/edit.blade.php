<x-admin-layout title="">
    <div class="row">
        <div class="col-12">
            <h2>Trang Sửa Sản Phẩm</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('admin.sanpham.upsert', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf {{-- Add this line to avoid 419 error --}}
                @include('includes.errors')
                <x-app-input name="Ten_San_Pham" label="Tên sản phẩm" value="{{ $data->Ten_San_Pham }}" />
                <x-app-input name="Gia" label="Giá" type="number" value="{{ $data->Gia }}" />
                <x-app-input name="Mo_Ta" label="Mô tả" value="{{ $data->Mo_Ta }}" />

                {{-- Display the existing image --}}
                @if (!empty($data->anh_bia))
                    <img src="{{ asset($data->anh_bia) }}" alt="Product Image" style="max-width: 200px; margin-bottom: 10px;">
                @endif

                {{-- Allow the user to upload a new image --}}
                <x-app-input type="file" name="anh_bia" label="Ảnh" />
                            <x-app-select name="Id_Danh_Muc" label="Tên Danh Mục" model="DanhMuc" displayMember="ten_danh_muc"
                    valueMember="id" />

                {{-- <x-app-input name="ten_danh_muc" label="ID Danh mục" value="{{ $data->ten_danh_muc }}" /> --}}
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Cập Nhật" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
