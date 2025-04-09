<?php

use App\Models\User;
use App\Models\Status;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(true);
            $table->dateTime('dueDate')->nullable(true);
            $table->foreignIdFor(Status::class)->constrained('status')->onDelete('cascade');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Status::class);
        });
        Schema::dropIfExists('tasks');
    }
};
