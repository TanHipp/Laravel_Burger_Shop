<x-admin-layout title="">
    
    <div class="row">
        <div class="col-12">
            <h4>Trang Thêm Mới Danh Mục</h4>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes.errors')
            <form action="{{ route('admin.danhmuc.upsert') }}" method="POST"> {{-- duong dan den trang create --}}
                @csrf {{-- -Them Dong Nay De Tranh Loi 419- --}}
                <x-app-input name="id" label="Id danh mục" />

                <x-app-input name="ten_danh_muc" label="Tên Danh Mục" />

                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Thêm" />
                </div>


            </form>

        </div>
    </div>

</x-admin-layout>
