<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
     Schema::create('pets', function (Blueprint $table) {
         # Increments method will make a Primary, Auto-Incrementing field.
         # Most tables start off this way
         $table->increments('id');
         # This generates two columns: `created_at` and `updated_at` to
         # keep track of changes to a row
         $table->timestamps();
         # The rest of the fields...
         $table->string('petName');
         $table->string('breed');
         $table->string('photo');
         $table->boolean('status');
         # FYI: We're skipping the 'tags' field for now; more on that later.
     });
 }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pets');
    }
}
