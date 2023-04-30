<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class payment_mothods_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            ['name' => 'Cash','description'=>'Bayar Tunai' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name' => 'Debit', 'description'=>'Bayar Debit','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],            

    ]);
    }
}
