<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Menambahkan kolom category_id
            $table->unsignedBigInteger('category_id')->nullable(); // nullable agar tidak wajib diisi
            
            // Menambahkan foreign key constraint jika perlu
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Menghapus kolom category_id
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}
