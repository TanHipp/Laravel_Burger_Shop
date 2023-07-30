<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SanphamController extends Controller
{
    public function search(Request $request)
    {
        $id = $request->input('id');
        $data = SanPham::where('id', $id)->paginate(10);

        if ($data->isEmpty()) {
            // If no data are found, display a message on the view
            return view('admin.sanpham.index', ['message' => 'No data found with the given ID.']);
        } else {
            // If data are found, show the search results on the view
            return view('admin.sanpham.index', compact('data'));
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SanPham::orderBy("id", "desc")->paginate(10);
        return view("admin.sanpham.index")->with("data", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.sanpham.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function upsert(Request $request, $id = null)
    {
        $data = $request->except('_token');

        $file = $request->file("anh_bia");
        if ($file) {
            $filename = $file->hashName();
            $file->storeAs("/file", $filename);
            $data["anh_bia"] = "/file/" . $filename;
        } else {
            unset($data["anh_bia"]);
        }

        $product = SanPham::updateOrCreate(['id' => $id], $data);

        $redirect = redirect()->route('admin.sanpham.index');

        // Set the appropriate success message based on the action (add/update)
        $successMessage = $product->wasRecentlyCreated ? 'Thêm sản phẩm thành công' : 'Cập nhật sản phẩm thành công';
        return $redirect->with('success_msg', $successMessage);
    }








    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implement the logic to display a specific resource if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = SanPham::findOrFail($id);
        return view('admin.sanpham.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implement the logic to update the specified resource if needed
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sanPham = SanPham::findOrFail($id);
        $tenSanPham = $sanPham->Ten_San_Pham;
        SanPham::destroy($id);
        return redirect()->back()->with('errors_msg', "Xóa '$tenSanPham' Thành Công");
    }

    /**
     * Thêm sản phẩm vào giỏ hàng.
     */
    public function addToCart(Request $request)
    {
        // Xử lý logic thêm vào giỏ hàng tại đây

        if (!Auth::check()) {
            // Nếu người dùng chưa đăng nhập, tạo thông báo yêu cầu đăng nhập
            Session::flash('error', 'Vui lòng đăng nhập để tiếp tục mua hàng.');
        }

        // Redirect về trang hiện tại sau khi thêm vào giỏ hàng
        return back();
    }

    /**
     * Mua ngay sản phẩm.
     */
    public function buyNow(Request $request)
    {
        // Xử lý logic mua ngay tại đây

        if (!Auth::check()) {
            // Nếu người dùng chưa đăng nhập, tạo thông báo yêu cầu đăng nhập
            Session::flash('error', 'Vui lòng đăng nhập để tiếp tục mua hàng.');
        }

        // Redirect về trang hiện tại sau khi mua ngay
        return back();
    }

    public function checkLoginStatus()
    {
        if (Auth::check()) {
            return response()->json(['loggedIn' => true]);
        } else {
            return response()->json(['loggedIn' => false, 'message' => 'Vui lòng đăng nhập để tiếp tục mua hàng.'], 403);
        }
    }
}
