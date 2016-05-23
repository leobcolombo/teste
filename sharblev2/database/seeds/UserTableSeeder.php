<?php
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	public function run() {
		$factory(User::class)->create([
			'name' => 'User',
			'email' => 'user@user.com',
			'password' => bcrypt(123456),
			'remember_token' => bcrypt(str_random(10)),
		]);
		$factory(User::class)->create([
			'name' => 'Admin',
			'email' => 'admin@user.com',
			'password' => bcrypt(123456),
			'role' => 'admin',
			'remember_token' => bcrypt(str_random(10)),
		]);
	}
}
?>