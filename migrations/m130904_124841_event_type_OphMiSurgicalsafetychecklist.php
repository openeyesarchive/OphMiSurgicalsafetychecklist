<?php 
class m130904_124841_event_type_OphMiSurgicalsafetychecklist extends CDbMigration
{
	public function up()
	{
		if (!$this->dbConnection->createCommand()->select('id')->from('event_type')->where('class_name=:class_name', array(':class_name'=>'OphMiSurgicalsafetychecklist'))->queryRow()) {
			$group = $this->dbConnection->createCommand()->select('id')->from('event_group')->where('name=:name',array(':name'=>'Miscellaneous'))->queryRow();
			$this->insert('event_type', array('class_name' => 'OphMiSurgicalsafetychecklist', 'name' => 'Surgical safety checklist','event_group_id' => $group['id']));
		}

		$event_type = $this->dbConnection->createCommand()->select('id')->from('event_type')->where('class_name=:class_name', array(':class_name'=>'OphMiSurgicalsafetychecklist'))->queryRow();

		if (!$this->dbConnection->createCommand()->select('id')->from('element_type')->where('name=:name and event_type_id=:eventTypeId', array(':name'=>'Sign in',':eventTypeId'=>$event_type['id']))->queryRow()) {
			$this->insert('element_type', array('name' => 'Sign in','class_name' => 'Element_OphMiSurgicalsafetychecklist_SignIn', 'event_type_id' => $event_type['id'], 'display_order' => 10));
		}

		$element_type = $this->dbConnection->createCommand()->select('id')->from('element_type')->where('event_type_id=:eventTypeId and name=:name', array(':eventTypeId'=>$event_type['id'],':name'=>'Sign in'))->queryRow();

		if (!$this->dbConnection->createCommand()->select('id')->from('element_type')->where('name=:name and event_type_id=:eventTypeId', array(':name'=>'Time out',':eventTypeId'=>$event_type['id']))->queryRow()) {
			$this->insert('element_type', array('name' => 'Time out','class_name' => 'Element_OphMiSurgicalsafetychecklist_TimeOut', 'event_type_id' => $event_type['id'], 'display_order' => 20));
		}

		$element_type = $this->dbConnection->createCommand()->select('id')->from('element_type')->where('event_type_id=:eventTypeId and name=:name', array(':eventTypeId'=>$event_type['id'],':name'=>'Time out'))->queryRow();

		if (!$this->dbConnection->createCommand()->select('id')->from('element_type')->where('name=:name and event_type_id=:eventTypeId', array(':name'=>'Sign out',':eventTypeId'=>$event_type['id']))->queryRow()) {
			$this->insert('element_type', array('name' => 'Sign out','class_name' => 'Element_OphMiSurgicalsafetychecklist_SignOut', 'event_type_id' => $event_type['id'], 'display_order' => 30));
		}

		$element_type = $this->dbConnection->createCommand()->select('id')->from('element_type')->where('event_type_id=:eventTypeId and name=:name', array(':eventTypeId'=>$event_type['id'],':name'=>'Sign out'))->queryRow();

		$this->createTable('ophmisurgicalsafetycheckl_signin_site_marked1', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_site_marked1_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_site_marked1_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_site_marked1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_site_marked1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_site_marked1',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_site_marked1',array('name'=>'N/A','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_site_marked2', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_site_marked2_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_site_marked2_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_site_marked2_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_site_marked2_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_site_marked2',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_site_marked2',array('name'=>'N/A','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_allergies1', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_allergies1_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_allergies1_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_allergies1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_allergies1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_allergies1',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_allergies1',array('name'=>'No','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_allergies2', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_allergies2_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_allergies2_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_allergies2_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_allergies2_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_allergies2',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_allergies2',array('name'=>'No','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_npo1', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_npo1_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_npo1_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_npo1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_npo1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_npo1',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_npo1',array('name'=>'No','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_npo2', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_npo2_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_npo2_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_npo2_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_npo2_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_npo2',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_npo2',array('name'=>'No','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_power_recorded1', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_power_recorded1_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_power_recorded1_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_power_recorded1_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_power_recorded1_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_power_recorded1',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_power_recorded1',array('name'=>'N/A','display_order'=>2));

		$this->createTable('ophmisurgicalsafetycheckl_signin_specific_concerns', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'name' => 'varchar(128) COLLATE utf8_bin NOT NULL',
				'display_order' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_specific_concerns_lmui_fk` (`last_modified_user_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_specific_concerns_cui_fk` (`created_user_id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_specific_concerns_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_specific_concerns_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('ophmisurgicalsafetycheckl_signin_specific_concerns',array('name'=>'Yes','display_order'=>1));
		$this->insert('ophmisurgicalsafetycheckl_signin_specific_concerns',array('name'=>'No','display_order'=>2));

		$this->createTable('et_ophmisurgicalsafetycheckl_signin', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'event_id' => 'int(10) unsigned NOT NULL',
				'confirm_details1' => 'tinyint(1) unsigned NOT NULL', // Confirm details 1
				'confirm_details2' => 'tinyint(1) unsigned NOT NULL', // Confirm details 2
				'site_marked1_id' => 'int(10) unsigned NOT NULL', // The surgical site is marked
				'site_marked2_id' => 'int(10) unsigned NOT NULL', // Confirm site marked 2
				'consent_form1' => 'tinyint(1) unsigned NOT NULL', // Consent form 1
				'consent_form2' => 'tinyint(1) unsigned NOT NULL', // Consent form 2
				'allergies1_id' => 'int(10) unsigned NOT NULL', // Allergies identified
				'allergies2_id' => 'int(10) unsigned NOT NULL', // Allergies identified 2
				'npo1_id' => 'int(10) unsigned NOT NULL', // NPO
				'npo2_id' => 'int(10) unsigned NOT NULL', // NPO 2
				'power_recorded1_id' => 'int(10) unsigned NOT NULL', // Intraocular lens type and power recoded in notes
				'power_available' => 'tinyint(1) unsigned NOT NULL',
				'specific_concerns_id' => 'int(10) unsigned NOT NULL', // Specific anaesthetic concerns
				'specific_addressed' => 'tinyint(1) unsigned NOT NULL',
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `et_ophmisurgicalsafetycheckl_signin_lmui_fk` (`last_modified_user_id`)',
				'KEY `et_ophmisurgicalsafetycheckl_signin_cui_fk` (`created_user_id`)',
				'KEY `et_ophmisurgicalsafetycheckl_signin_ev_fk` (`event_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_site_marked1_fk` (`site_marked1_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_site_marked2_fk` (`site_marked2_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_allergies1_fk` (`allergies1_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_allergies2_fk` (`allergies2_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_npo1_fk` (`npo1_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_npo2_fk` (`npo2_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_power_recorded1_fk` (`power_recorded1_id`)',
				'KEY `ophmisurgicalsafetycheckl_signin_specific_concerns_fk` (`specific_concerns_id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_signin_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_signin_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_signin_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_site_marked1_fk` FOREIGN KEY (`site_marked1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_site_marked1` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_site_marked2_fk` FOREIGN KEY (`site_marked2_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_site_marked2` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_allergies1_fk` FOREIGN KEY (`allergies1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_allergies1` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_allergies2_fk` FOREIGN KEY (`allergies2_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_allergies2` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_npo1_fk` FOREIGN KEY (`npo1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_npo1` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_npo2_fk` FOREIGN KEY (`npo2_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_npo2` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_power_recorded1_fk` FOREIGN KEY (`power_recorded1_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_power_recorded1` (`id`)',
				'CONSTRAINT `ophmisurgicalsafetycheckl_signin_specific_concerns_fk` FOREIGN KEY (`specific_concerns_id`) REFERENCES `ophmisurgicalsafetycheckl_signin_specific_concerns` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->createTable('et_ophmisurgicalsafetycheckl_timeout', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'event_id' => 'int(10) unsigned NOT NULL',
				'introduced' => 'tinyint(1) unsigned NOT NULL', // Introduced
				'verbal_confirm1' => 'tinyint(1) unsigned NOT NULL', // Verbal confirm 1
				'verbal_confirm2' => 'tinyint(1) unsigned NOT NULL', // Verbal confirm 2
				'verbal_confirm3' => 'tinyint(1) unsigned NOT NULL', // Verbal confirm 3
				'allergies' => 'tinyint(1) unsigned NOT NULL', // Allergies
				'latex' => 'tinyint(1) unsigned NOT NULL', // Latex
				'eye_protected' => 'tinyint(1) unsigned NOT NULL', // Eye protected
				'eye_protection_tape' => 'tinyint(1) unsigned NOT NULL',
				'eye_protection_shield' => 'tinyint(1) unsigned NOT NULL',
				'specific_equipment' => 'tinyint(1) unsigned NOT NULL', // Specific equipment
				'non_routine' => 'tinyint(1) unsigned NOT NULL', // Non routine
				'instrument_sterility' => 'tinyint(1) unsigned NOT NULL', // Instrument sterility
				'specific_issues' => 'tinyint(1) unsigned NOT NULL', // Specific issues
				'initial_count' => 'tinyint(1) unsigned NOT NULL', // Initial count
				'risk_reduction' => 'tinyint(1) unsigned NOT NULL', // Risk reduction
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `et_ophmisurgicalsafetycheckl_timeout_lmui_fk` (`last_modified_user_id`)',
				'KEY `et_ophmisurgicalsafetycheckl_timeout_cui_fk` (`created_user_id`)',
				'KEY `et_ophmisurgicalsafetycheckl_timeout_ev_fk` (`event_id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_timeout_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_timeout_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_timeout_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->createTable('et_ophmisurgicalsafetycheckl_signout', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'event_id' => 'int(10) unsigned NOT NULL',
				'count_complete' => 'tinyint(1) unsigned NOT NULL', // Count is complete
				'specimins_cultures' => 'tinyint(1) unsigned NOT NULL', // Specimins cultures
				'labelled_identifiers' => 'tinyint(1) unsigned NOT NULL', // Labelled identifiers
				'problems_identified' => 'tinyint(1) unsigned NOT NULL', // Problems identified
				'problems_detail' => 'text COLLATE utf8_bin DEFAULT \'\'', // Problems detail
				'recovery_instructions' => 'tinyint(1) unsigned NOT NULL', // Recovery instructions
				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `et_ophmisurgicalsafetycheckl_signout_lmui_fk` (`last_modified_user_id`)',
				'KEY `et_ophmisurgicalsafetycheckl_signout_cui_fk` (`created_user_id`)',
				'KEY `et_ophmisurgicalsafetycheckl_signout_ev_fk` (`event_id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_signout_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_signout_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophmisurgicalsafetycheckl_signout_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

	}

	public function down()
	{
		$this->dropTable('et_ophmisurgicalsafetycheckl_signin');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_site_marked1');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_site_marked2');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_allergies1');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_allergies2');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_npo1');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_npo2');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_power_recorded1');
		$this->dropTable('ophmisurgicalsafetycheckl_signin_specific_concerns');
		$this->dropTable('et_ophmisurgicalsafetycheckl_timeout');
		$this->dropTable('et_ophmisurgicalsafetycheckl_signout');

		$event_type = $this->dbConnection->createCommand()->select('id')->from('event_type')->where('class_name=:class_name', array(':class_name'=>'OphMiSurgicalsafetychecklist'))->queryRow();

		foreach ($this->dbConnection->createCommand()->select('id')->from('event')->where('event_type_id=:event_type_id', array(':event_type_id'=>$event_type['id']))->queryAll() as $row) {
			$this->delete('audit', 'event_id='.$row['id']);
			$this->delete('event', 'id='.$row['id']);
		}

		$this->delete('element_type', 'event_type_id='.$event_type['id']);
		$this->delete('event_type', 'id='.$event_type['id']);

		echo "If you are removing this module you may also need to remove references to it in your configuration files\n";
		return true;
	}
}

