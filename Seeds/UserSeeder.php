<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'Riskapap',
			'useremail' => 'riskapuspaap@gmail.com',
			'userpassword' => password_hash('riskapap', PASSWORD_DEFAULT),
		]); 
	}
}