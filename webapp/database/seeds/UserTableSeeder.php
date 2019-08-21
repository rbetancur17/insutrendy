<?php

use App\User;
use Faker\Generator;
use Styde\Seeder\Seeder;

class UserTableSeeder extends Seeder
{
    protected $total = 1;

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name' => 'administrador',
            'email' => 'admin@insutrendy.com',
            'password'  => bcrypt('secret'),
        ];
    }
}