<?php
	$factory->define(App\Models\User::class, function(Faker\Generator $faker) {
		return [
			'name' => $faker->name,
			'email' => $faker->email,
			'password' => bcrypt(str_random(10)),
			'remember_token' => bcrypt(str_random(10)),
		];
	});

	$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
		return [
			'name' => $faker->word
		];
	});
		$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
		return [
			'name' => $faker->word
			'description' => $faker->sentence,
			'price' => $faker->numberBetween(10, 50)
		];
	});
?>