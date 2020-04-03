<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MockPizzaTable extends Migration
{
    private $description = ''
            . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, '
            . 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
            . 'Ut enim ad minim veniam, quis nostrud exercitation ullamco '
            . 'laboris nisi ut aliquip ex ea commodo consequat.';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('pizza')->insertOrIgnore([
            ['id' => 1, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
            ['id' => 2, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
            ['id' => 3, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
            ['id' => 4, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
            ['id' => 5, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
            ['id' => 6, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
            ['id' => 7, 'name' => 'Margarita', 'description' => $this->description, 'price' => 9.99],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('pizza')->truncate();
    }
}
