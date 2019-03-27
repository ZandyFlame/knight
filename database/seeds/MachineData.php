<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class MachineData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('machine')->insert([
            'machine_code' => Str::random(10),
            'machine_qr_path' => Str::random(10),
            'machine_agent_id' => 1,
            'machine_status' => 1,
            'machine_type' => 1,
        ]);
    }
}
