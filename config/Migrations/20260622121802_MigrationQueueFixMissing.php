<?php

use Migrations\BaseMigration;

class MigrationQueueFixMissing extends BaseMigration {

	/**
	 * Change Method.
	 *
	 * Write your reversible migrations using this method.
	 *
	 * More information on writing migrations is available here:
	 * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
	 *
	 * @return void
	 */
	public function up(): void {
		$this->table('queued_jobs')
			->addColumn('attempts', 'tinyinteger', [
				'default' => '0',
				'null' => true,
				'signed' => false,
			])
			->update();
	}
public function down(): void {

	}

}
