<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SYSTEMオペレータ作成
        $param = [
            'name' => 'system',
            'email' => 'example@test.com',
            'password' => Hash::make('password'),
            'role' => Operator::ROLE_SYSTEM
        ];
        $operator = new Operator;
        $operator->fill($param)->save();
    }
}
