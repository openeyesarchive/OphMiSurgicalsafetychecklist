<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

/**
 * This is the model class for table "et_ophmisurgicalsafetycheckl_signin".
 *
 * The followings are the available columns in table:
 * @property string $id
 * @property integer $event_id
 * @property integer $confirm_details1
 * @property integer $confirm_details2
 * @property integer $site_marked1_id
 * @property integer $site_marked2_id
 * @property integer $consent_form1
 * @property integer $consent_form2
 * @property integer $allergies1_id
 * @property integer $allergies2_id
 * @property integer $npo1_id
 * @property integer $npo2_id
 * @property integer $power_recorded1_id
 * @property boolean $power_available
 * @property integer $specific_concerns_id
 * @property boolean $specific_addressed
 *
 * The followings are the available model relations:
 *
 * @property ElementType $element_type
 * @property EventType $eventType
 * @property Event $event
 * @property User $user
 * @property User $usermodified
 * @property OphMiSurgicalsafetychecklist_SignIn_SiteMarked1 $site_marked1
 * @property OphMiSurgicalsafetychecklist_SignIn_SiteMarked2 $site_marked2
 * @property OphMiSurgicalsafetychecklist_SignIn_Allergies1 $allergies1
 * @property OphMiSurgicalsafetychecklist_SignIn_Allergies2 $allergies2
 * @property OphMiSurgicalsafetychecklist_SignIn_Npo1 $npo1
 * @property OphMiSurgicalsafetychecklist_SignIn_Npo2 $npo2
 * @property OphMiSurgicalsafetychecklist_SignIn_PowerRecorded1 $power_recorded1
 * @property OphMiSurgicalsafetychecklist_SignIn_SpecificConcerns $specific_concerns
 */

class Element_OphMiSurgicalsafetychecklist_SignIn extends BaseEventTypeElement
{
	public $service;

	/**
	 * Returns the static model of the specified AR class.
	 * @return the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'et_ophmisurgicalsafetycheckl_signin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, confirm_details1, confirm_details2, site_marked1_id, site_marked2_id, consent_form1, consent_form2, allergies1_id, allergies2_id, npo1_id, npo2_id, power_recorded1_id, specific_concerns_id, ', 'safe'),
			array('confirm_details1, confirm_details2, site_marked1_id, site_marked2_id, consent_form1, consent_form2, allergies1_id, allergies2_id, npo1_id, npo2_id, power_recorded1_id, specific_concerns_id, ', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, event_id, confirm_details1, confirm_details2, site_marked1_id, site_marked2_id, consent_form1, consent_form2, allergies1_id, allergies2_id, npo1_id, npo2_id, power_recorded1_id, specific_concerns_id, ', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'element_type' => array(self::HAS_ONE, 'ElementType', 'id','on' => "element_type.class_name='".get_class($this)."'"),
			'eventType' => array(self::BELONGS_TO, 'EventType', 'event_type_id'),
			'event' => array(self::BELONGS_TO, 'Event', 'event_id'),
			'user' => array(self::BELONGS_TO, 'User', 'created_user_id'),
			'usermodified' => array(self::BELONGS_TO, 'User', 'last_modified_user_id'),
			'site_marked1' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_SiteMarked1', 'site_marked1_id'),
			'site_marked2' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_SiteMarked2', 'site_marked2_id'),
			'allergies1' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_Allergies1', 'allergies1_id'),
			'allergies2' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_Allergies2', 'allergies2_id'),
			'npo1' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_Npo1', 'npo1_id'),
			'npo2' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_Npo2', 'npo2_id'),
			'power_recorded1' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_PowerRecorded1', 'power_recorded1_id'),
			'specific_concerns' => array(self::BELONGS_TO, 'OphMiSurgicalsafetychecklist_SignIn_SpecificConcerns', 'specific_concerns_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'event_id' => 'Event',
			'confirm_details1' => 'Yes',
			'confirm_details2' => 'Yes',
			'site_marked1_id' => 'The surgical site is marked',
			'site_marked2_id' => 'Confirm site marked 2',
			'consent_form1' => 'Yes',
			'consent_form2' => 'Yes',
			'allergies1_id' => 'Allergies identified',
			'allergies2_id' => 'Allergies identified 2',
			'npo1_id' => 'NPO',
			'npo2_id' => 'NPO 2',
			'power_recorded1_id' => 'Intraocular lens type and power recoded in notes',
			'power_available' => 'Yes',
			'specific_concerns_id' => 'Specific anaesthetic concerns',
			'specific_addressed' => 'Yes',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('event_id', $this->event_id, true);
		$criteria->compare('confirm_details1', $this->confirm_details1);
		$criteria->compare('confirm_details2', $this->confirm_details2);
		$criteria->compare('site_marked1_id', $this->site_marked1_id);
		$criteria->compare('site_marked2_id', $this->site_marked2_id);
		$criteria->compare('consent_form1', $this->consent_form1);
		$criteria->compare('consent_form2', $this->consent_form2);
		$criteria->compare('allergies1_id', $this->allergies1_id);
		$criteria->compare('allergies2_id', $this->allergies2_id);
		$criteria->compare('npo1_id', $this->npo1_id);
		$criteria->compare('npo2_id', $this->npo2_id);
		$criteria->compare('power_recorded1_id', $this->power_recorded1_id);
		$criteria->compare('specific_concerns_id', $this->specific_concerns_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}
?>
