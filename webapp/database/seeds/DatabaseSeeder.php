<?php
 
use Styde\Seeder\BaseSeeder;
 
class DatabaseSeeder extends BaseSeeder
{
 	protected $truncate = array(
        'users',
    );
    
    protected $seeders = array(
        'User',
    );
}