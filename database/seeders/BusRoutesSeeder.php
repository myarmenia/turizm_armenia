<?php

namespace Database\Seeders;

use App\Models\BusRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusRoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = [ "route_1", "route_2"];

        foreach ($routes as $route) {
            BusRoute::updateOrCreate([
                'key' => $route
            ]);

        }
    }
}
