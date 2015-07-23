<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{

			Product::create([
                'code' => $faker->regexify('[A-Z0-9]{4,8}'),
                'name' => $faker->username,
                'name' => $faker->name,
                'unit' => $faker->randomElement(['KG', 'GR', 'UND']),
                'size' => $faker->randomElement(['P', 'M', 'G']),
                'cost' => $faker->randomFloat(2),
                'price' => $faker->randomFloat(2),
                'alert_quantity' => $faker->randomNumber(),
                'image' => $faker->image($dir = '/tmp', $width = 340, $height = 280),
                'category_id' => $faker->randomNumber(),
                'quantity' => $faker->randomNumber,
                'tax_rate' => $faker->randomNumber,
			]);
		}
	}

}