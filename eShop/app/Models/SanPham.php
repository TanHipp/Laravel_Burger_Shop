<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SanPham extends Model
{
    use HasFactory;
    protected $fillable =
    [
        "id",
        "Ten_San_Pham",
        "Gia",
        "Mo_Ta",
        "anh_bia",
        "Id_Danh_Muc",
    ];

    // Cau hinh lienkeg khoa ngoai (left join)
    public function danh_mucs():BelongsTo{  
        return $this-> belongsTo(DanhMuc::class,"Id_Danh_Muc","id");
    }
}
