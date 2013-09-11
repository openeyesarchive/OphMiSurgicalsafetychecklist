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

<h4 class="elementTypeName"><?php echo $element->elementType->name?></h4>

<table class="subtleWhite normalText">
	<tbody>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('introduced'))?></td>
			<td><span class="big"><?php echo $element->introduced ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('verbal_confirm1'))?></td>
			<td><span class="big"><?php echo $element->verbal_confirm1 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('verbal_confirm2'))?></td>
			<td><span class="big"><?php echo $element->verbal_confirm2 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('verbal_confirm3'))?></td>
			<td><span class="big"><?php echo $element->verbal_confirm3 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('allergies'))?>:</td>
			<td><span class="big"><?php echo $element->allergies ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('latex'))?>:</td>
			<td><span class="big"><?php echo $element->latex ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('eye_protected'))?></td>
			<td><span class="big"><?php echo $element->eye_protected ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('eye_protection_tape'))?></td>
			<td><span class="big"><?php echo $element->eye_protection_tape?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('eye_protection_shield'))?></td>
			<td><span class="big"><?php echo $element->eye_protection_shield?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('specific_equipment'))?></td>
			<td><span class="big"><?php echo $element->specific_equipment ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('non_routine'))?></td>
			<td><span class="big"><?php echo $element->non_routine ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('instrument_sterility'))?></td>
			<td><span class="big"><?php echo $element->instrument_sterility ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('specific_issues'))?></td>
			<td><span class="big"><?php echo $element->specific_issues ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('initial_count'))?></td>
			<td><span class="big"><?php echo $element->initial_count ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('risk_reduction'))?>:</td>
			<td><span class="big"><?php echo $element->risk_reduction ? 'Yes' : 'No'?></span></td>
		</tr>
	</tbody>
</table>
