<?php

use Migrations\BaseMigration;

class MigrationQueueRename extends BaseMigration {

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
		$table = $this->table('queued_jobs');
		$table->renameColumn('job_type', 'job_task')
			->update();

		$table->changeColumn('job_task', 'string', [
			'length' => 90,
			'null' => false,
			'default' => null,
			'encoding' => 'utf8mb4',
			'collation' => 'utf8mb4_unicode_ci',
		])->update();
	}
public function down(): void {

	}

}
