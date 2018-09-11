<?php

use \App\Core\Migration;

class Pedidos extends Migration
{
    public function up()  {
        $this->schema->create('pedidos', function(Illuminate\Database\Schema\Blueprint $table){
            $table->increments('id');
            $table->timestamps();
        });
    
    }
    public function down()  {
        $this->schema->drop('pedidos');
    }
}
