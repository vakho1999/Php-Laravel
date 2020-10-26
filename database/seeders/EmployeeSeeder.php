<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            'name' => Str::str('vakho'),
            'surname' => Str::str("kavtaradze"),
            'position' => Str::str("Software engineer"),
            'phone' => Str::str("579332211"),
            'is_hired' => true,

        ]);
    }
}
