<?php

class m131205_133651_table_versioning extends CDbMigration
{
	public function up()
	{
		$this->execute("
CREATE TABLE `et_ophmisurgicalsafetycheckl_signin_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `confirm_details1` tinyint(1) unsigned NOT NULL,
  `confirm_details2` tinyint(1) unsigned NOT NULL,
  `site_marked1_id` int(10) unsigned NOT NULL,
  `site_marked2_id` int(10) unsigned NOT NULL,
  `consent_form1` tinyint(1) unsigned NOT NULL,
  `consent_form2` tinyint(1) unsigned NOT NULL,
  `allergies1_id` int(10) unsigned NOT NULL,
  `allergies2_id` int(10) unsigned NOT NULL,
  `npo1_id` int(10) unsigned NOT NULL,
  `npo2_id` int(10) unsigned NOT NULL,
  `power_recorded1_id` int(10) unsigned NOT NULL,
  `power_available` tinyint(1) unsigned NOT NULL,
  `specific_concerns_id` int(10) unsigned NOT NULL,
  `specific_addressed` tinyint(1) unsigned NOT NULL,
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_signin_lmui_fk` (`last_modified_user_id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_signin_cui_fk` (`created_user_id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_signin_ev_fk` (`event_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_site_marked1_fk` (`site_marked1_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_site_marked2_fk` (`site_marked2_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_allergies1_fk` (`allergies1_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_allergies2_fk` (`allergies2_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_npo1_fk` (`npo1_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_npo2_fk` (`npo2_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_power_recorded1_fk` (`power_recorded1_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_specific_concerns_fk` (`specific_concerns_id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_signin_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_signin_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_signin_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_site_marked1_fk` FOREIGN KEY (`site_marked1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_site_marked1` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_site_marked2_fk` FOREIGN KEY (`site_marked2_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_site_marked2` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_allergies1_fk` FOREIGN KEY (`allergies1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_allergies1` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_allergies2_fk` FOREIGN KEY (`allergies2_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_allergies2` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_npo1_fk` FOREIGN KEY (`npo1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_npo1` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_npo2_fk` FOREIGN KEY (`npo2_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_npo2` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_power_recorded1_fk` FOREIGN KEY (`power_recorded1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_power_recorded1` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_specific_concerns_fk` FOREIGN KEY (`specific_concerns_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_specific_concerns` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('et_ophmisurgicalsafetycheckl_signin_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','et_ophmisurgicalsafetycheckl_signin_version');

		$this->createIndex('et_ophmisurgicalsafetycheckl_signin_aid_fk','et_ophmisurgicalsafetycheckl_signin_version','id');
		$this->addForeignKey('et_ophmisurgicalsafetycheckl_signin_aid_fk','et_ophmisurgicalsafetycheckl_signin_version','id','et_ophmisurgicalsafetycheckl_signin','id');

		$this->addColumn('et_ophmisurgicalsafetycheckl_signin_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('et_ophmisurgicalsafetycheckl_signin_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','et_ophmisurgicalsafetycheckl_signin_version','version_id');
		$this->alterColumn('et_ophmisurgicalsafetycheckl_signin_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `et_ophmisurgicalsafetycheckl_signout_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `count_complete` tinyint(1) unsigned NOT NULL,
  `specimins_cultures` tinyint(1) unsigned NOT NULL,
  `labelled_identifiers` tinyint(1) unsigned NOT NULL,
  `problems_identified` tinyint(1) unsigned NOT NULL,
  `problems_detail` text COLLATE utf8_bin,
  `recovery_instructions` tinyint(1) unsigned NOT NULL,
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_signout_lmui_fk` (`last_modified_user_id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_signout_cui_fk` (`created_user_id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_signout_ev_fk` (`event_id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_signout_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_signout_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_signout_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('et_ophmisurgicalsafetycheckl_signout_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','et_ophmisurgicalsafetycheckl_signout_version');

		$this->createIndex('et_ophmisurgicalsafetycheckl_signout_aid_fk','et_ophmisurgicalsafetycheckl_signout_version','id');
		$this->addForeignKey('et_ophmisurgicalsafetycheckl_signout_aid_fk','et_ophmisurgicalsafetycheckl_signout_version','id','et_ophmisurgicalsafetycheckl_signout','id');

		$this->addColumn('et_ophmisurgicalsafetycheckl_signout_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('et_ophmisurgicalsafetycheckl_signout_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','et_ophmisurgicalsafetycheckl_signout_version','version_id');
		$this->alterColumn('et_ophmisurgicalsafetycheckl_signout_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `et_ophmisurgicalsafetycheckl_timeout_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `introduced` tinyint(1) unsigned NOT NULL,
  `verbal_confirm1` tinyint(1) unsigned NOT NULL,
  `verbal_confirm2` tinyint(1) unsigned NOT NULL,
  `verbal_confirm3` tinyint(1) unsigned NOT NULL,
  `allergies` tinyint(1) unsigned NOT NULL,
  `latex` tinyint(1) unsigned NOT NULL,
  `eye_protected` tinyint(1) unsigned NOT NULL,
  `eye_protection_tape` tinyint(1) unsigned NOT NULL,
  `eye_protection_shield` tinyint(1) unsigned NOT NULL,
  `specific_equipment` tinyint(1) unsigned NOT NULL,
  `non_routine` tinyint(1) unsigned NOT NULL,
  `instrument_sterility` tinyint(1) unsigned NOT NULL,
  `specific_issues` tinyint(1) unsigned NOT NULL,
  `initial_count` tinyint(1) unsigned NOT NULL,
  `risk_reduction` tinyint(1) unsigned NOT NULL,
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_timeout_lmui_fk` (`last_modified_user_id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_timeout_cui_fk` (`created_user_id`),
  KEY `acv_et_ophmisurgicalsafetycheckl_timeout_ev_fk` (`event_id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_timeout_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_timeout_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmisurgicalsafetycheckl_timeout_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('et_ophmisurgicalsafetycheckl_timeout_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','et_ophmisurgicalsafetycheckl_timeout_version');

		$this->createIndex('et_ophmisurgicalsafetycheckl_timeout_aid_fk','et_ophmisurgicalsafetycheckl_timeout_version','id');
		$this->addForeignKey('et_ophmisurgicalsafetycheckl_timeout_aid_fk','et_ophmisurgicalsafetycheckl_timeout_version','id','et_ophmisurgicalsafetycheckl_timeout','id');

		$this->addColumn('et_ophmisurgicalsafetycheckl_timeout_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('et_ophmisurgicalsafetycheckl_timeout_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','et_ophmisurgicalsafetycheckl_timeout_version','version_id');
		$this->alterColumn('et_ophmisurgicalsafetycheckl_timeout_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_allergies1_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_allergies1_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_allergies1_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_allergies1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_allergies1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_allergies1_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_allergies1_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_allergies1_aid_fk','ophmisurgicalsafetycheckl_signin_allergies1_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_allergies1_aid_fk','ophmisurgicalsafetycheckl_signin_allergies1_version','id','ophmisurgicalsafetycheckl_signin_allergies1','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies1_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies1_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_allergies1_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_allergies1_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_allergies2_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_allergies2_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_allergies2_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_allergies2_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_allergies2_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_allergies2_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_allergies2_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_allergies2_aid_fk','ophmisurgicalsafetycheckl_signin_allergies2_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_allergies2_aid_fk','ophmisurgicalsafetycheckl_signin_allergies2_version','id','ophmisurgicalsafetycheckl_signin_allergies2','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies2_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_allergies2_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_allergies2_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_allergies2_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_npo1_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_npo1_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_npo1_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_npo1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_npo1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_npo1_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_npo1_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_npo1_aid_fk','ophmisurgicalsafetycheckl_signin_npo1_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_npo1_aid_fk','ophmisurgicalsafetycheckl_signin_npo1_version','id','ophmisurgicalsafetycheckl_signin_npo1','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo1_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo1_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_npo1_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_npo1_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_npo2_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_npo2_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_npo2_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_npo2_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_npo2_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_npo2_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_npo2_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_npo2_aid_fk','ophmisurgicalsafetycheckl_signin_npo2_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_npo2_aid_fk','ophmisurgicalsafetycheckl_signin_npo2_version','id','ophmisurgicalsafetycheckl_signin_npo2','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo2_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_npo2_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_npo2_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_npo2_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_power_recorded1_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_power_recorded1_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_power_recorded1_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_power_recorded1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_power_recorded1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_power_recorded1_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_power_recorded1_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_power_recorded1_aid_fk','ophmisurgicalsafetycheckl_signin_power_recorded1_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_power_recorded1_aid_fk','ophmisurgicalsafetycheckl_signin_power_recorded1_version','id','ophmisurgicalsafetycheckl_signin_power_recorded1','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_power_recorded1_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_power_recorded1_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_power_recorded1_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_power_recorded1_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_site_marked1_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_site_marked1_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_site_marked1_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_site_marked1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_site_marked1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_site_marked1_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_site_marked1_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_site_marked1_aid_fk','ophmisurgicalsafetycheckl_signin_site_marked1_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_site_marked1_aid_fk','ophmisurgicalsafetycheckl_signin_site_marked1_version','id','ophmisurgicalsafetycheckl_signin_site_marked1','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked1_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked1_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_site_marked1_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_site_marked1_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_site_marked2_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_site_marked2_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_site_marked2_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_site_marked2_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_site_marked2_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_site_marked2_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_site_marked2_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_site_marked2_aid_fk','ophmisurgicalsafetycheckl_signin_site_marked2_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_site_marked2_aid_fk','ophmisurgicalsafetycheckl_signin_site_marked2_version','id','ophmisurgicalsafetycheckl_signin_site_marked2','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked2_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_site_marked2_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_site_marked2_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_site_marked2_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');

		$this->execute("
CREATE TABLE `ophmisurgicalsafetycheckl_signin_specific_concerns_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `display_order` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_specific_concerns_lmui_fk` (`last_modified_user_id`),
  KEY `acv_ophmisurgicalsafetycheckl_signin_specific_concerns_cui_fk` (`created_user_id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_specific_concerns_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_ophmisurgicalsafetycheckl_signin_specific_concerns_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('ophmisurgicalsafetycheckl_signin_specific_concerns_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','ophmisurgicalsafetycheckl_signin_specific_concerns_version');

		$this->createIndex('ophmisurgicalsafetycheckl_signin_specific_concerns_aid_fk','ophmisurgicalsafetycheckl_signin_specific_concerns_version','id');
		$this->addForeignKey('ophmisurgicalsafetycheckl_signin_specific_concerns_aid_fk','ophmisurgicalsafetycheckl_signin_specific_concerns_version','id','ophmisurgicalsafetycheckl_signin_specific_concerns','id');

		$this->addColumn('ophmisurgicalsafetycheckl_signin_specific_concerns_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('ophmisurgicalsafetycheckl_signin_specific_concerns_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','ophmisurgicalsafetycheckl_signin_specific_concerns_version','version_id');
		$this->alterColumn('ophmisurgicalsafetycheckl_signin_specific_concerns_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');
	}

	public function down()
	{
		$this->dropTable('et_ophmisurgicalsafetycheckl_signin_version');
		$this->dropTable('et_ophmisurgicalsafetycheckl_signout_version');
		$this->dropTable('et_ophmisurgicalsafetycheckl_timeout_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_allergies1_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_allergies2_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_npo1_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_npo2_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_power_recorded1_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_site_marked1_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_site_marked2_version');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_specific_concerns_version');
	}
}
