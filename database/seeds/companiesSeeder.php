<?php

use Illuminate\Database\Seeder;
use App\Model\Company;
class companiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class,5) ->create();
    }
}
