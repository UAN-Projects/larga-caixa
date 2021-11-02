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

        // $this->db->insert_batch('users', [
        //     [
        //         'ip_address'              => '127.0.0.1',
        //         'username'                => 'administrator',
        //         'password'                => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa',
        //         'email'                   => 'admin@uan.com',
        //         'forgotten_password_code' => NULL,
        //         'created_on'              => '1268889823',
        //         'last_login'              => '1268889823',
        //         'active'                  => '1',
        //         'first_name'              => 'Admin',
        //         'last_name'               => 'istrator',
        //         'company'                 => 'ADMIN',
        //         'phone'                   => '123456789',
        //     ],
        // ]);
        
        $this->db->insert_batch('users', [
            [
                'ip_address'              => '127.0.0.1',
                'username'                => 'admin',
                'password'                => '$2y$10$i4H5t2VFP/3aqZa/jjNTie3s.Qn5W0wgSWMXE0g3282TS9JqnyQ1q',
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