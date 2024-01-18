<?php

use Database\Seeders\MenuSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForCollege extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('sliders', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('file_upload',500)->nullable();
            $table->string('description',500)->nullable();
            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('icon')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });


        Schema::create('wishlists', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('product_id')->nullable();
            $table->unsignedSmallInteger('user_id')->nullable();
            $table->boolean('is_wishlist')->default(0);
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });


        Schema::create('about_us', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',255);
            $table->text('details');
            $table->string('file_upload',500)->nullable();
                    
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',100)->nullable();
            $table->unsignedSmallInteger('menu_id')->nullable();

            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);

            $table->foreign('menu_id','fk_categories_menu_id')->references('id')->on('menus')->onDelete('cascade')->change();
        });

        
        Schema::create('contact_us', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('full_address',200);
            $table->string('address',200);
            $table->string('phone',50);
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->string('email',50);
            $table->string('message_username',100)->nullable();
            $table->string('message_email',100)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('message',500)->nullable();
                    
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });

        Schema::create('mst_social_medias', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',50)->nullable();
            $table->string('link',50)->nullable();
            $table->string('icon')->nullable();

            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });


        Schema::create('products', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('file_upload',500)->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->unsignedSmallInteger('display_order')->default(0);

            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('product_details', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('product_id');
            $table->string('description',500)->nullable();

            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });
        Schema::create('cart', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('product_id');
            $table->string('description',500)->nullable();

            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });
        
        
        


  

        Schema::create('app_settings', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title')->nullable();
            $table->string('full_address',100)->nullable();
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->string('from_day')->nullable();
            $table->string('to_day')->nullable();
            $table->string('phone',10)->nullable();
            $table->string('contact_phone',10)->nullable();
            $table->string('discription',500)->nullable();
            $table->string('fax',50)->nullable();
            $table->string('gps',1000)->nullable();
            $table->string('email',50)->nullable();
            $table->string('logo',500)->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });


        $DbSeed = new DatabaseSeeder();
        $DbSeed->run();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
