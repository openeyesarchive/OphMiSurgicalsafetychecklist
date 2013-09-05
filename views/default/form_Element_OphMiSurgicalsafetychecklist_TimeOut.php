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
?>

<div class="element <?php echo $element->elementType->class_name?>"
	data-element-type-id="<?php echo $element->elementType->id?>"
	data-element-type-class="<?php echo $element->elementType->class_name?>"
	data-element-type-name="<?php echo $element->elementType->name?>"
	data-element-display-order="<?php echo $element->elementType->display_order?>">
	<h4 class="elementTypeName"><?php echo $element->elementType->name; ?></h4>

	<input class="active" type="hidden" id="Element_OphMiSurgicalsafetychecklist_TimeOut_active" name="Element_OphMiSurgicalsafetychecklist_TimeOut_active" value="<?php echo $this->elementActive($element) ? '1' : '0'?>" />

	<table class="eventDetail checklist">
		<thead>
			<tr>
				<td class="header">
					Before start of surgical intervention
				</td>
			</tr>
		</thead>
		<tbody<?php if (!$this->elementActive($element)) {?> style="display: none;"<?php }?>>
			<tr>
				<td>
					<strong>All team members introduced themselves by name and role</strong><br/>
					<?php echo $form->checkBox($element, 'introduced', array('text-align'=>'right','no-label'=>true))?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Surgeon, <?php echo Yii::app()->params['OphMiSurgicalsafetychecklist_anaesthetist']?> and scrub nurse check patient ID band and consent form and verbally confirm:</strong><br/>
					<?php echo $form->checkBox($element, 'verbal_confirm1', array('text-align'=>'right','no-label'=>true))?>
					<?php echo $form->checkBox($element, 'verbal_confirm2', array('text-align'=>'right','no-label'=>true))?>
					<?php echo $form->checkBox($element, 'verbal_confirm3', array('text-align'=>'right','no-label'=>true))?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Allergies:</strong><br/>
					<?php echo $form->radioBoolean($element, 'allergies', array('nowrapper'=>true,'separator'=>'<br/>'))?>
					<div class="latex_option">
						<span style="margin-right: 1em;"><strong>Latex:</strong></span>
						<?php echo $form->radioBoolean($element, 'latex', array('nowrapper'=>true))?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Non-operative eye protected:</strong><br/>
					<?php echo $form->checkBox($element, 'eye_protected', array('text-align'=>'right','no-label'=>true))?><br/>
					If yes, <?php echo $form->checkBox($element, 'eye_protected_tape', array('text-align'=>'right','no-label'=>true,'nowrapper'=>true))?>
					<?php echo $form->checkBox($element, 'eye_protected_shield', array('text-align'=>'right','no-label'=>true,'nowrapper'=>true))?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Surgeon to confirm:</strong><br/>
					<?php echo $form->checkBox($element, 'specific_equipment', array('text-align'=>'right','no-label'=>true))?>
					<?php echo $form->checkBox($element, 'non_routine', array('text-align'=>'right','no-label'=>true))?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Scrub nurse to confirm:</strong><br/>
					<?php echo $form->checkBox($element, 'instrument_sterility', array('text-align'=>'right','no-label'=>true))?>
					<span class="small">(including indicator results)</span>
					<?php echo $form->checkBox($element, 'specific_issues', array('text-align'=>'right','no-label'=>true))?>
					<?php echo $form->checkBox($element, 'initial_count', array('text-align'=>'right','no-label'=>true))?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Are the following required to reduce risk of surgical infection?</strong>
					<ul>
						<li>Antibiotic prophylaxis</li>
						<li>Glycemic control</li>
					</ul>
					<?php echo $form->checkBox($element, 'risk_reduction', array('text-align'=>'right','no-label'=>true))?>
				</td>
			</tr>
		</tbody>
	</table>
</div>
