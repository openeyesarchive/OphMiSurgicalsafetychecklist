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

$form = new BaseEventTypeCActiveForm;
?>

<div class="element <?php echo $element->elementType->class_name?>"
	data-element-type-id="<?php echo $element->elementType->id?>"
	data-element-type-class="<?php echo $element->elementType->class_name?>"
	data-element-type-name="<?php echo $element->elementType->name?>"
	data-element-display-order="<?php echo $element->elementType->display_order?>">
	<h4 class="elementTypeName"><?php echo $element->elementType->name; ?></h4>

	<input class="active" type="hidden" id="Element_OphMiSurgicalsafetychecklist_SignOut_active" name="Element_OphMiSurgicalsafetychecklist_SignOut_active" value="<?php echo $this->elementActive($element) ? '1' : '0'?>" />

	<table class="eventDetail checklist">
		<thead>
			<tr>
				<td class="header">
					At end of procedure
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<strong>Surgeon / OR nurse verbally confirms with the team:</strong><br/>
					<?php echo $form->checkBox($element, 'count_complete', array('text-align'=>'right','no-label'=>true),array('disabled'=>'disabled'))?>
					<?php echo $form->checkBox($element, 'specimins_cultures', array('text-align'=>'right','no-label'=>true),array('disabled'=>'disabled'))?>
					<?php echo $form->checkBox($element, 'labelled_identifiers', array('text-align'=>'right','no-label'=>true),array('disabled'=>'disabled'))?>
					<?php echo $form->checkBox($element, 'problems_identified', array('text-align'=>'right','no-label'=>true),array('disabled'=>'disabled'))?>
					<?php echo $form->textArea($element, 'problems_detail', array('rows' => 3, 'cols' => 36,'disabled'=>'disabled'))?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Surgeon and <?php echo Yii::app()->params['OphMiSurgicalsafetychecklist_anaesthetist']?></strong><br/>
					<?php echo $form->checkBox($element, 'recovery_instructions', array('text-align'=>'right','no-label'=>true),array('disabled'=>'disabled'))?>
				</td>
			</tr>
		</tbody>
	</table>
</div>
