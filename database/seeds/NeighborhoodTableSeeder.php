<?php

use Illuminate\Database\Seeder;

class NeighborhoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('neighborhoods')->insert([
			['name' => 'Allegheny Center'],
			['name' => 'Allegheny West'],
			['name' => 'Allentown'],
			['name' => 'Arlington'],
			['name' => 'Arlington Heights'],
			['name' => 'Banksville'],
			['name' => 'Bedford Dwellings'],
			['name' => 'Beechview'],
			['name' => 'Beltzhoover'],
			['name' => 'Bloomfield'],
			['name' => 'Bluff'],
			['name' => 'Bon Air'],
			['name' => 'Brighton Heights'],
			['name' => 'Brookline'],
			['name' => 'California-Kirkbride'],
			['name' => 'Carrick'],
			['name' => 'Central Business District'],
			['name' => 'Cultural District'],
			['name' => 'Central Lawrenceville'],
			['name' => 'Central Northside'],
			['name' => 'Mexican War Streets'],
			['name' => 'Central Oakland'],
			['name' => 'Chartiers'],
			['name' => 'Chateau'],
			['name' => 'Crafton Heights'],
			['name' => 'Crawford-Roberts'],
			['name' => 'Duquesne Heights'],
			['name' => 'East Allegheny'],
			['name' => 'East Carnegie'],
			['name' => 'East Hills'],
			['name' => 'East Liberty'],
			['name' => 'Elliott'],
			['name' => 'Esplen'],
			['name' => 'Fairywood'],
			['name' => 'Fineview'],
			['name' => 'Friendship'],
			['name' => 'Garfield'],
			['name' => 'Glen Hazel'],
			['name' => 'Greenfield'],
			['name' => 'Four Mile Run'],
			['name' => 'Hays'],
			['name' => 'Hazelwood'],
			['name' => 'Highland Park'],
			['name' => 'Homewood North'],
			['name' => 'Homewood South'],
			['name' => 'Homewood West'],
			['name' => 'Knoxville'],
			['name' => 'Larimer'],
			['name' => 'Lincoln–Lemington–Belmar'],
			['name' => 'Lincoln Place'],
			['name' => 'Lower Lawrenceville'],
			['name' => 'Manchester'],
			['name' => 'Marshall-Shadeland'],
			['name' => 'Middle Hill'],
			['name' => 'Morningside'],
			['name' => 'Mount Oliver'],
			['name' => 'Mount Washington'],
			['name' => 'Chatham Village'],
			['name' => 'New Homestead'],
			['name' => 'North Oakland'],
			['name' => 'North Point Breeze'],
			['name' => 'North Shore'],
			['name' => 'Northview Heights'],
			['name' => 'Oakwood'],
			['name' => 'Overbrook'],
			['name' => 'Perry North'],
			['name' => 'Perry South'],
			['name' => 'Point Breeze'],
			['name' => 'Polish Hill'],
			['name' => 'Regent Square'],
			['name' => 'Ridgemont'],
			['name' => 'Saint Clair'],
			['name' => 'Shadyside'],
			['name' => 'Sheraden'],
			['name' => 'South Oakland'],
			['name' => 'Panther Hollow'],
			['name' => 'Southshore'],
			['name' => 'South Side Flats'],
			['name' => 'South Side Slopes'],
			['name' => 'Spring Garden'],
			['name' => 'Spring Hill–City View'],
			['name' => 'Squirrel Hill North'],
			['name' => 'Squirrel Hill South'],
			['name' => 'Summerset at Frick Park'],
			['name' => 'Stanton Heights'],
			['name' => 'Strip District'],
			['name' => 'Summer Hill'],
			['name' => 'Swisshelm Park'],
			['name' => 'Terrace Village'],
			['name' => 'Troy Hill'],
			['name' => 'Washington\'s Landing'],
			['name' => 'Upper Hill'],
			['name' => 'Upper Lawrenceville'],
			['name' => 'West End'],
			['name' => 'West Oakland'],
			['name' => 'Westwood'],
			['name' => 'Windgap'],
        ]);
    }
}