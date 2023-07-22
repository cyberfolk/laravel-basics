<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement($this->getCompanies());
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->time_departure = $faker->time('H:i');
            $train->time_arrival = $faker->time('H:i');
            $train->train_code = $faker->bothify('??-#######');
            $train->carriage = $faker->numberBetween(7, 20);
            $train->in_time = $faker->randomElement([1, 0]);
            $train->cancelled = $faker->randomElement([1, 0]);
            $train->save();
        }
    }

    private function getCompanies()
    {
        return [
            'Airlake Terminal Railway',
            'Alabama and Florida Rail Road Company',
            'Alaska Railroad',
            'Amtrak',
            'AN Railway',
            'Arizona & California Railroad',
            'Baltimore and Ohio Railroad',
            'BHP Nevada Railroad',
            'BNSF Railway',
            'Brightline',
            'Burlington Northern Railroad',
            'Burlington Junction Railway',
            'California High-Speed Rail',
            'Caltrain',
            'Chesapeake and Ohio Railway',
            'Central Pacific Railroad',
            'Chicago, Burlington and Quincy Railroad',
            'Chicago and North Western Transportation Company',
            'Chicago South Shore and South Bend Railroad',
            'Conrail ',
            'CSX Transportation',
            'Dakota, Minnesota and Eastern Railroad',
            'Durango and Silverton Narrow Gauge Railroad',
            'Florida East Coast Railroad',
            'Genesee & Wyoming',
            'Great Northern Railroad',
            'Iowa, Chicago and Eastern Railroad',
            'Iowa Interstate Railroad',
            'Kansas City Southern Railway',
            'Lake State Railway',
            'Louisville and Nashville Railroad',
            'MARC Train',
            'Metra',
            'Metrolink',
            'Metro Transit',
            'Metropolitan Transportation Authority',
            'Miami Metrorail',
            'Milwaukee Road ',
            'Missouri Pacific',
            'Mobile and Girard Railroad',
            'Mobile and Montgomery Railroad Company',
            'Mobile and Montgomery Railway Company',
            'Mobile and Ohio Railroad',
            'Montana Rail Link',
            'Montgomery and West Point Railroad',
            'Nevada Northern Railway',
            'New York and Atlantic Railway',
            'New York Central Railroad',
            'New York, New Haven and Hartford Railroad',
            'Nickel Plate Road',
            'Norfolk Southern Railway',
            'Norfolk and Western Railway',
            'PATH',
            'Pennsylvania Railroad',
            'Pensacola and Louisville Railroad Company',
            'Pensacola Railroad',
            'Providence & Worcester Railroad',
            'Santa Fe Railroad',
            'Southern Pacific Transportation Company',
            'South Shore Line',
            'St. Croix Valley Railroad',
            'SunRail',
            'Tacoma Rail',
            'Tri-Rail',
            'Union Pacific Railroad',
            'Washington Department of Transportation',
            'Western Maryland Railway',
            'Western Pacific Railroad',
            'Wheeling and Lake Erie Railway',
            'Wisconsin and Southern Railroad'
        ];
    }
}
