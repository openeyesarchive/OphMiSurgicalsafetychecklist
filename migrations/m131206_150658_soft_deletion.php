<?php

class m131206_150658_soft_deletion extends CDbMigration
{
	public function up()
	{
		$this->addColumn('et_ophmisurgicalsafetycheckl_signin','deleted','tinyint(1) unsigned not null');
		$this->addColumn('et_ophmisurgicalsafetycheckl_signin_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('et_ophmisurgicalsafetycheckl_signout','deleted','tinyint(1) unsigned not null');
		$this->addColumn('et_ophmisurgicalsafetycheckl_signout_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('et_ophmisurgicalsafetycheckl_timeout','deleted','tinyint(1) unsigned not null');
		$this->addColumn('et_ophmisurgicalsafetycheckl_timeout_version','deleted','tinyint(1) unsigned not null');
	}

	public function down()
	{
		$this->dropColumn('et_ophmisurgicalsafetycheckl_signin','deleted');
		$this->dropColumn('et_ophmisurgicalsafetycheckl_signin_version','deleted');
		$this->dropColumn('et_ophmisurgicalsafetycheckl_signout','deleted');
		$this->dropColumn('et_ophmisurgicalsafetycheckl_signout_version','deleted');
		$this->dropColumn('et_ophmisurgicalsafetycheckl_timeout','deleted');
		$this->dropColumn('et_ophmisurgicalsafetycheckl_timeout_version','deleted');
	}
}
