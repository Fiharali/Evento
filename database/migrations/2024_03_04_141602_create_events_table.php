<?php

use App\Models\Category;
use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('price');
            $table->string('place');
            $table->date('date');
            $table->enum('status', [Event::IS_APPROVED, Event::IS_PENDING])->default(Event::IS_PENDING);
            $table->enum('acceptation', [Event::ACCEPTATION_AUTO, Event::ACCEPTATION_MAN])->default(Event::ACCEPTATION_MAN);
            $table->integer('places_number');
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
