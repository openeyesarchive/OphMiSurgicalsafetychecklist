<?php

class m140304_100334_transactions extends CDbMigration
{
	public $tables = array('et_ophmisurgicalsafetycheckl_signin','et_ophmisurgicalsafetycheckl_signout','et_ophmisurgicalsafetycheckl_timeout','ophmisurgicalsafetycheckl_signin_allergies1','ophmisurgicalsafetycheckl_signin_allergies2','ophmisurgicalsafetycheckl_signin_npo1','ophmisurgicalsafetycheckl_signin_npo2','ophmisurgicalsafetycheckl_signin_power_recorded1','ophmisurgicalsafetycheckl_signin_site_marked1','ophmisurgicalsafetycheckl_signin_site_marked2','ophmisurgicalsafetycheckl_signin_specific_concerns');

	public function up()
	{
		foreach ($this->tables as $table) {
			$this->addColumn($table,'hash','varchar(40) not null');
			$this->addColumn($table,'transaction_id','int(10) unsigned null');
			$this->createIndex($table.'_tid',$table,'transaction_id');
			$this->addForeignKey($table.'_tid',$table,'transaction_id','transaction','id');

			$this->addColumn($table.'_version','hash','varchar(40) not null');
			$this->addColumn($table.'_version','transaction_id','int(10) unsigned null');
			$this->addColumn($table.'_version','deleted_transaction_id','int(10) unsigned null');
			$this->createIndex($table.'_vtid',$table.'_version','transaction_id');
			$this->addForeignKey($table.'_vtid',$table.'_version','transaction_id','transaction','id');
			$this->createIndex($table.'_dtid',$table.'_version','deleted_transaction_id');
			$this->addForeignKey($table.'_dtid',$table.'_version','deleted_transaction_id','transaction','id');
		}
	}

	public function down()
	{
		foreach ($this->tables as $table) {
			$this->dropColumn($table,'hash');
			$this->dropForeignKey($table.'_tid',$table);
			$this->dropIndex($table.'_tid',$table);
			$this->dropColumn($table,'transaction_id');

			$this->dropColumn($table.'_version','hash');
			$this->dropForeignKey($table.'_vtid',$table.'_version');
			$this->dropIndex($table.'_vtid',$table.'_version');
			$this->dropColumn($table.'_version','transaction_id');
			$this->dropForeignKey($table.'_dtid',$table.'_version');
			$this->dropIndex($table.'_dtid',$table.'_version');
			$this->dropColumn($table.'_version','deleted_transaction_id');
		}
	}
}
