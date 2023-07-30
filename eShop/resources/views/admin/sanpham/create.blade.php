<x-admin-layout title="">
    <div class="row">
        <div class="col-12">
            <h2>Trang Thêm Mới Sản Phẩm</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes.errors')
            <form action="{{ route('admin.sanpham.upsert') }}" method="POST" enctype="multipart/form-data">
                {{-- duong dan den trang create --}}
                @csrf {{-- -Them Dong Nay De Tranh Loi 419- --}}
                <x-app-input name="Ten_San_Pham" label="Tên sản phẩm" />
                <x-app-input type="Gia" name="Gia" label="Giá" />
                <x-app-input name="Mo_Ta" label="Mô tả" />
                <x-app-input type="file" name="anh_bia" label="Ảnh" />
                <x-app-select name="Id_Danh_Muc" label="Tên Danh Mục" model="DanhMuc" displayMember="ten_danh_muc"
                    valueMember="id" />
                <div class="mt-3">
                    <input type="submit" class="btn  btn-success" value="Thêm">
                </div>

            </form>

        </div>
    </div>

</x-admin-layout>
