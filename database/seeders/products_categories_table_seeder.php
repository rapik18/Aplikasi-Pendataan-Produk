<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class products_categories_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            ['name' => 'Obat-obatan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],            
        ]);
    }
}
