<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActiveAndPassiveEndorsableToEndorsement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('endorsements', function(Blueprint $table){
           $table->morphs('active_endorsable');
           $table->morphs('passive_endorsable');
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('endorsements', function(Blueprint $table){
          $table->dropColumn(['active_endorsable_id', 'active_endorsable_type',
          'passive_endorsable_id', 'passive_endorsable_type']);
        });
    }
}
