<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $table->decimal('total_amount', 10, 2);
            $table->text('delivery_address');

            $table->timestamps();
        });
    }

    /**
     * Rollback (Method Down)
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};