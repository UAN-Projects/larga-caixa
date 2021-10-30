<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seed extends CI_Controller
{

    public function index() 
    {
        $this->db->insert_batch('grupos', [
            [
				'name'        => 'admin',
				'description' => 'Administrator'
			],
			[
				'name'        => 'members',
				'description' => 'General User'
			]
        ]);     // grupos

        $this->db->insert_batch('users', [
            [
                'ip_address'              => '127.0.0.1',
                'username'                => 'administrator',
                'password'                => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa',
                'email'                   => 'admin@admin.com',
                'activation_code'         => '',
                'forgotten_password_code' => NULL,
                'created_on'              => '1268889823',
                'last_login'              => '1268889823',
                'active'                  => '1',
                'first_name'              => 'Admin',
                'last_name'               => 'istrator',
                'company'                 => 'ADMIN',
                'phone'                   => '0',
            ],
        ]);     //users
        
        $this->db->insert_batch('users_grupos', [
            [
				'user_id'  => '1',
				'group_id' => '1',
			],
			[
				'user_id'  => '1',
				'group_id' => '2',
			]
        ]);     //users_grupos
    }

            
}