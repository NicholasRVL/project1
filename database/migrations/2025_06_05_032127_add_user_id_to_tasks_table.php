<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToTasksTable extends Migration
{
    public function up(): void
{
    Schema::table('tasks', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->after('id'); // tambahin kolom user_id
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // relasi
    });
}

public function down(): void
{
    Schema::table('tasks', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
}

}
