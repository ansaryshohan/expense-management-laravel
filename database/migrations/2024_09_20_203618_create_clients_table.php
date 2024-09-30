<?php

use App\Models\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("client_image");
            $table->string("address");
            $table->string("city");
            $table->string("division");
            $table->string("zip")->nullable();
            $table->timestamps();
        });
        Schema::create('ssc_result', function (Blueprint $table) {
            $table->id();
            $table->string("degree_name");
            $table->string("result");
            $table->string("institute");
            $table->string("passing_year");
            $table->string("board");
            $table->unsignedBigInteger('client_id');
            $table->foreign("client_id")
                ->references("id")
                ->on("clients")
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->timestamps();
        });
        Schema::create('hsc_result', function (Blueprint $table) {
            $table->id();
            $table->string("degree_name");
            $table->string("result");
            $table->string("institute");
            $table->string("passing_year");
            $table->string("board");
            $table->unsignedBigInteger('client_id');
            $table->foreign("client_id")
                ->references("id")->on("clients")
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->timestamps();
        });
        Schema::create('graduation_result', function (Blueprint $table) {
            $table->id();
            $table->string("degree_name");
            $table->string("result");
            $table->string("institute");
            $table->string("passing_year");
            $table->unsignedBigInteger('client_id');
            $table->foreign("client_id")
                ->references("id")
                ->on("clients")
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->timestamps();
        });
        Schema::create('post_graduation_result', function (Blueprint $table) {
            $table->id();
            $table->string("degree_name");
            $table->string("result");
            $table->string("institute");
            $table->string("passing_year");
            $table->unsignedBigInteger('client_id');
            $table->foreign("client_id")
                ->references("id")
                ->on("clients")
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('ssc_result');
        Schema::dropIfExists('hsc_result');
        Schema::dropIfExists('graduation_result');
        Schema::dropIfExists('post_graduation_result');
    }
};
