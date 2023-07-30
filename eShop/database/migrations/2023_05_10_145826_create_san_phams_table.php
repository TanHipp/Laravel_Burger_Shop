<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string("Ten_San_Pham",20)->nullable();
            $table->decimal("Gia",20,0)->nullable(); //Decimal co phan nguyen va thuc nen suy ra co nguyen la 20 thuc la 0
            $table->text("Mo_Ta")->nullable();
            $table->string("anh_bia",500)->nullable();

            $table->unsignedBigInteger("Id_Nguoi_Tao") // NGUOI TAO
            ->index("idx_San_Pham_Id_Nguoi_Tao")
            ->nullable();

            $table->unsignedBigInteger("Id_Danh_Muc") // DANH MUC
            ->index("idx_San_Pham_Id_Danh_Muc_Tao")
            ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
