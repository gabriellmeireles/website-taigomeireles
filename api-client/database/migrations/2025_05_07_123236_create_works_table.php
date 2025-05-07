<?php

use App\Models\Series;
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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->integer('width',4)->nullable(false);
            $table->integer('height',4)->nullable(false);
            $table->year('year')->nullable(false);
            $table->string('technic')->nullable(false);
            $table->decimal('price',8,2)->nullable(true)->default(0.00);
            $table->boolean('available')->nullable(false)->default(false);
            $table->boolean('cover')->nullable(false)->default(false);
            $table->foreignIdFor(Series::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
