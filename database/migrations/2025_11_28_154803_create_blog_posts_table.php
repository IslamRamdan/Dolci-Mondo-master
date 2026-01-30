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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();

            // الاسم
            $table->string('title_ar'); // اسم عربي
            $table->string('title_en'); // اسم انجليزي

            // الصورة
            $table->string('image')->nullable();

            // الأسعار
            $table->string('wholesale_price', 10, 2); // سعر الجملة
            $table->string('sale_price', 10, 2);      // سعر البيع

            $table->foreignId('category_id')
                ->after('id')
                ->constrained('categories')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
