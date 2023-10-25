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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->nullable();
            $table->string('type')->nullable();
            $table->string('profile_photo')->nullable();
            $table->text('biography')->nullable(); //Datos de como lo adoptaro de donde es y cosas asi
            $table->text('feature')->nullable(); // Aca son datos mas duros como las cosas propias en caso que se adopte a la mascote
            $table->boolean('adoption')->nullable();
            $table->foreignId('organization_id')->nullable()->constrained('organizations');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
