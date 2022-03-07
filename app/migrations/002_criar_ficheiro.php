<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Criar_ficheiro extends CI_Migration {

	public function up() {
		$this->dbforge->add_field([
			'id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'user_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
            ),
			'preco' => array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0.00
			),
			'conta' => [
				'type'       => 'VARCHAR',
				'constraint' => '4',
			],
			'ficheiro' => [
				'type'       => 'VARCHAR',
				'constraint' => '250',
				'unique' => TRUE
			],
			'descricao' => array(
                'type' => 'TEXT',
            ),
			'created_at datetime default current_timestamp',
            'updated_at datetime on update current_timestamp'
		]);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('ficheiros');

		$this->dbforge->add_field([
			'id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'user_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
            ),
			'ficheiro_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
			),
			'created_at datetime default current_timestamp',
            'updated_at datetime on update current_timestamp'
		]);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users_ficheiros');
	}

	public function down() {
		$this->dbforge->drop_table('ficheiros', TRUE);
		$this->dbforge->drop_table('users_ficheiros', TRUE);
	}
}
