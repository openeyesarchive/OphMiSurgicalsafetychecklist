<?php

class m131210_144543_soft_deletion extends CDbMigration
{
	public function up()
	{
		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies1','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies1_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies2','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies2_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo1','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo1_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo2','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo2_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_power_recorded1','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_power_recorded1_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked1','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked1_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked2','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked2_version','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_specific_concerns','deleted','tinyint(1) unsigned not null');
		$this->addColumn('ophmisurgicalsafetycheckl_signin_specific_concerns_version','deleted','tinyint(1) unsigned not null');
	}

	public function down()
	{
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_allergies1','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_allergies1_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_allergies2','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_allergies2_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_npo1','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_npo1_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_npo2','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_npo2_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_power_recorded1','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_power_recorded1_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_site_marked1','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_site_marked1_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_site_marked2','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_site_marked2_version','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_specific_concerns','deleted');
		$this->dropColumn('ophmisurgicalsafetycheckl_signin_specific_concerns_version','deleted');
	}
}
