<?php

namespace Database\Seeders;

use App\Models\DetailCustomer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailCostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_customer = [
            [
                'user_id'        => 1,
                'type_user_id'   => 1,
                'contact'        => NULL,
                'address'        => NULL,
                'photo'          => NULL,
                'gender'         => NULL,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        DetailCustomer::insert($detail_customer);
    }
}
