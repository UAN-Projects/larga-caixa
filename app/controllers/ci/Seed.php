<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seed extends CI_Controller
{

    public function index() 
    {
        $this->db->insert_batch('groups', [
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
                'username'                => 'admin',
                'password'                => '$2y$10$RiytSx9fdNlQDsrt88r0feB.FzNZjgT0CQQtZZmSDya37MV4EALje',
                'email'                   => 'admin@uan.com',
                'first_name'              => 'Admin',
                'phone'                   => '123456789',
            ],
        ]);
        
        $this->db->insert_batch('users_groups', [
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