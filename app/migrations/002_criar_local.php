<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Criar_local extends CI_Migration {

	public function up() {
		$this->dbforge->add_field([
			'id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nome' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'created_at datetime default current_timestamp',
            'updated_at datetime on update current_timestamp'
		]);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('paises');

		$this->dbforge->add_field([
			'id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nome' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'created_at datetime default current_timestamp',
            'updated_at datetime on update current_timestamp'
		]);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('provincias');

		$this->dbforge->add_field([
			'id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nome' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'created_at datetime default current_timestamp',
            'updated_at datetime on update current_timestamp'
		]);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('municipios');
	}

	public function down() {
		$this->dbforge->drop_table('municipios', TRUE);
		$this->dbforge->drop_table('provincias', TRUE);
		$this->dbforge->drop_table('paises', TRUE);
	}
}
