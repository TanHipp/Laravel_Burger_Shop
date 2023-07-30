<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DanhMucController extends Controller
{

    public function index()
    {
        // $data = DanhMuc::all();
        $data = DanhMuc::orderBy("id", "desc")->paginate(5);
        // dd($data);
        return view("admin.danhmuc.index")->with("data", $data);
    }


    public function create()
    {
        return view("admin.danhmuc.create");
    }


    public function show(string $id)
    {
    }

    public function edit($id)
    {
        $data = DanhMuc::findOrFail($id);
        return view("admin.danhmuc.edit")->with("data", $data);
    }


    //======================CREATE AND EDIT================================//

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);
        $this->customValidate($request);

        DanhMuc::updateOrCreate(['id' => $id], $data);
        if ($id == null) {
            $msg = "Thêm Danh Mục Thành Công";
        } else {
            $msg = "Cập Nhật Danh Mục Thành Cồng";
        }

        return redirect()
            ->route('admin.danhmuc.index')
            ->with('success_msg', $msg);
        return redirect()->route('admin.danhmuc.index');
    }
    //======================CREATE AND EDIT================================//



    //======================DELETE================================//

    public function destroy($id) // ==> Xóa dữ liệu database theo id
    {
        $ten_danh_muc  = DanhMuc::findOrFail($id);
        $ten_danh_muc = $ten_danh_muc->ten_danh_muc;
        DanhMuc::destroy($id);
        return redirect()
            ->back()
            ->with('errors_msg', "Xóa  '$ten_danh_muc'  Thành Công");
    }

    private function
    customValidate(Request $request)
    {
        $rules = [
            "ten_danh_muc" => "required|min:3|max:100" // not null nho nhat 3 ki tu lon nhat 100 ki tu
        ];
        $request->validate($rules);
    }
    //====================== END DELETE ================================//
}
