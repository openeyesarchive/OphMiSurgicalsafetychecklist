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

	<table class="eventDetail checklist">
		<tr>
			<td colspan="3" class="header">
				Before start of anaesthesia
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<span>Nursing handover<span>
				<span class="right">Anaesthesiologist</span>
			</td>
		</tr>
		<tr>
			<td style="width: 65px;">
				<?php echo $form->checkBox($element, 'confirm_details1', array('text-align'=>'right','no-label'=>true))?>
			</td>
			<td>
				<strong>The patient (or guardian)* confirmed patient's identity, procedure, site and consent (including type of anaesthesia)</strong>
			</td>
			<td style="width: 65px;">
				<?php echo $form->checkBox($element, 'confirm_details2', array('text-align'=>'right','no-label'=>true))?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->radioButtons($element, 'site_marked1_id', 'ophmisurgicalsafetycheckl_signin_site_marked1',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
			</td>
			<td>
				<strong>The surgical site is marked</strong>
			</td>
			<td>
				<?php echo $form->radioButtons($element, 'site_marked2_id', 'ophmisurgicalsafetycheckl_signin_site_marked2',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->checkBox($element, 'consent_form1', array('text-align'=>'right','no-label'=>true))?>
			</td>
			<td>
				<strong>The consent form is signed and the details match the patient's identity band</strong>
			</td>
			<td>
				<?php echo $form->checkBox($element, 'consent_form2', array('text-align'=>'right','no-label'=>true))?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->radioButtons($element, 'allergies1_id', 'ophmisurgicalsafetycheckl_signin_allergies1',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
			</td>
			<td>
				<strong>The patient's allergies have been identified</strong> (including latex)
			</td>
			<td>
				<?php echo $form->radioButtons($element, 'allergies2_id', 'ophmisurgicalsafetycheckl_signin_allergies2',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->radioButtons($element, 'npo1_id', 'ophmisurgicalsafetycheckl_signin_npo1',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
			</td>
			<td>
				<strong>NPO</strong>
			</td>
			<td>
				<?php echo $form->radioButtons($element, 'npo2_id', 'ophmisurgicalsafetycheckl_signin_npo2',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->radioButtons($element, 'power_recorded1_id', 'ophmisurgicalsafetycheckl_signin_power_recorded1',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
				<br/><br/>
				<?php echo $form->checkBox($element, 'power_available', array('text-align'=>'right','no-label'=>true))?>
			</td>
			<td>
				<strong>Intraocular lens type and power recorded in notes</strong><br/><br/>
				If yes, the appropriate equipment/assistance is available or medically addressed
			</td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<strong>Specific anaesthetic concerns<br/>
					including Venous Thromboembolism</strong><br/><br/>
					If yes, the appropriate equipment/assistance is available or medically addressed
			</td>
			<td>
				<?php echo $form->radioButtons($element, 'specific_concerns_id', 'ophmisurgicalsafetycheckl_signin_specific_concerns',null,false,false,false,false,array('nowrapper'=>true,'separator'=>'<br/>'))?>
				<br/><br/>
				<?php echo $form->checkBox($element, 'specific_addressed', array('text-align'=>'right','no-label'=>true))?>
			</td>
		</tr>
	</table>
</div>
