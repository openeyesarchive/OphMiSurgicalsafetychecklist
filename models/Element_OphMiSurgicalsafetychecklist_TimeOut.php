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
 * This is the model class for table "et_ophmisurgicalsafetycheckl_timeout".
 *
 * The followings are the available columns in table:
 * @property string $id
 * @property integer $event_id
 * @property integer $introduced
 * @property integer $verbal_confirm1
 * @property integer $verbal_confirm2
 * @property integer $verbal_confirm3
 * @property integer $allergies
 * @property integer $latex
 * @property integer $eye_protected
 * @property integer $eye_protection_tape
 * @property integer $eye_protection_shield
 * @property integer $specific_equipment
 * @property integer $non_routine
 * @property integer $instrument_sterility
 * @property integer $specific_issues
 * @property integer $initial_count
 * @property integer $risk_reduction
 *
 * The followings are the available model relations:
 *
 * @property ElementType $element_type
 * @property EventType $eventType
 * @property Event $event
 * @property User $user
 * @property User $usermodified
 */

class Element_OphMiSurgicalsafetychecklist_TimeOut extends BaseEventTypeElement
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
		return 'et_ophmisurgicalsafetycheckl_timeout';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, introduced, verbal_confirm1, verbal_confirm2, verbal_confirm3, allergies, latex, eye_protected, eye_protection_tape, eye_protection_shield, specific_equipment, non_routine, instrument_sterility, specific_issues, initial_count, risk_reduction, ', 'safe'),
			array('introduced, verbal_confirm1, verbal_confirm2, verbal_confirm3, allergies, latex, eye_protected, specific_equipment, non_routine, instrument_sterility, specific_issues, initial_count, risk_reduction, ', 'requiredIfActive'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, event_id, introduced, verbal_confirm1, verbal_confirm2, verbal_confirm3, allergies, latex, eye_protected, eye_protected_tape, eye_protected_shield, specific_equipment, non_routine, instrument_sterility, specific_issues, initial_count, risk_reduction, ', 'safe', 'on' => 'search'),
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
			'introduced' => 'Yes / Already performed',
			'verbal_confirm1' => 'Patient\'s name / Identification number',
			'verbal_confirm2' => 'Procedure planned',
			'verbal_confirm3' => 'Site marked by "X"',
			'allergies' => 'Allergies',
			'latex' => 'Latex',
			'eye_protected' => 'Yes / not applicaple',
			'eye_protected_tape' => 'Tape',
			'eye_protected_shield' => 'Shield',
			'specific_equipment' => 'Specific equipment requirements confirmed',
			'non_routine' => 'Non routine steps the team should know',
			'instrument_sterility' => 'Sterility of the instrumentation confirmed',
			'specific_issues' => 'Specific issues or concerns addressed',
			'initial_count' => 'Initial count conducted',
			'risk_reduction' => 'Yes / not applicable',
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
		$criteria->compare('introduced', $this->introduced);
		$criteria->compare('verbal_confirm1', $this->verbal_confirm1);
		$criteria->compare('verbal_confirm2', $this->verbal_confirm2);
		$criteria->compare('verbal_confirm3', $this->verbal_confirm3);
		$criteria->compare('allergies', $this->allergies);
		$criteria->compare('latex', $this->latex);
		$criteria->compare('eye_protected', $this->eye_protected);
		$criteria->compare('eye_protected_tape', $this->eye_protection_tape);
		$criteria->compare('eye_protected_shield', $this->eye_protection_shield);
		$criteria->compare('specific_equipment', $this->specific_equipment);
		$criteria->compare('non_routine', $this->non_routine);
		$criteria->compare('instrument_sterility', $this->instrument_sterility);
		$criteria->compare('specific_issues', $this->specific_issues);
		$criteria->compare('initial_count', $this->initial_count);
		$criteria->compare('risk_reduction', $this->risk_reduction);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}

	public function requiredIfActive($attribute, $params)
	{
		if (@$_POST['Element_OphMiSurgicalsafetychecklist_TimeOut_active']) {
			if ($this->$attribute == null) {
				if (!@$params['message']) {
					$params['message'] = "{attribute} cannot be blank.";
				}
				$params['{attribute}'] = $this->getAttributeLabel($attribute);

				$this->addError($attribute, strtr($params['message'], $params));
			}
		}
	}
}
?>
