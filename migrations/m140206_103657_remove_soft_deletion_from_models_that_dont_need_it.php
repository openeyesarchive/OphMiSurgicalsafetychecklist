<?php

class m140206_103657_remove_soft_deletion_from_models_that_dont_need_it extends CDbMigration
{
	public $tables = array(
		'et_ophmisurgicalsafetycheckl_signin',
		'et_ophmisurgicalsafetycheckl_signout',
		'et_ophmisurgicalsafetycheckl_timeout',
		'ophmisurgicalsafetycheckl_signin_allergies1',
		'ophmisurgicalsafetycheckl_signin_allergies2',
		'ophmisurgicalsafetycheckl_signin_npo1',
		'ophmisurgicalsafetycheckl_signin_npo2',
		'ophmisurgicalsafetycheckl_signin_power_recorded1',
		'ophmisurgicalsafetycheckl_signin_site_marked1',
		'ophmisurgicalsafetycheckl_signin_site_marked2',
		'ophmisurgicalsafetycheckl_signin_specific_concerns',
	);

	public function up()
	{
		foreach ($this->tables as $table) {
			$this->dropColumn($table,'deleted');
			$this->dropColumn($table.'_version','deleted');

			$this->dropForeignKey("{$table}_aid_fk",$table."_version");
		}
	}

	public function down()
	{
		foreach ($this->tables as $table) {
			$this->addColumn($table,'deleted','tinyint(1) unsigned not null');
			$this->addColumn($table."_version",'deleted','tinyint(1) unsigned not null');

			$this->addForeignKey("{$table}_aid_fk",$table."_version","id",$table,"id");
		}
	}
}
