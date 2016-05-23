<?php
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

	public function run() {
		$factory(Category::class, 10)->create()->each(function($c) {
			for($i=0; $<=5; $i++) {
				$c->products()->save(factory(\App\Models\Product::class)->make());
			}
		});
	}
}
?>