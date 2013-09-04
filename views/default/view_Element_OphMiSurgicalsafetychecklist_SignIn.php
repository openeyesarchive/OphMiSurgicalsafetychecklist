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
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('confirm_details1'))?></td>
			<td><span class="big"><?php echo $element->confirm_details1 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('confirm_details2'))?></td>
			<td><span class="big"><?php echo $element->confirm_details2 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('site_marked1_id'))?></td>
			<td><span class="big"><?php echo $element->site_marked1 ? $element->site_marked1->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('site_marked2_id'))?></td>
			<td><span class="big"><?php echo $element->site_marked2 ? $element->site_marked2->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('consent_form1'))?></td>
			<td><span class="big"><?php echo $element->consent_form1 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('consent_form2'))?></td>
			<td><span class="big"><?php echo $element->consent_form2 ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('allergies1_id'))?></td>
			<td><span class="big"><?php echo $element->allergies1 ? $element->allergies1->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('allergies2_id'))?></td>
			<td><span class="big"><?php echo $element->allergies2 ? $element->allergies2->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('npo1_id'))?></td>
			<td><span class="big"><?php echo $element->npo1 ? $element->npo1->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('npo2_id'))?></td>
			<td><span class="big"><?php echo $element->npo2 ? $element->npo2->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('power_recorded1_id'))?></td>
			<td><span class="big"><?php echo $element->power_recorded1 ? $element->power_recorded1->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('specific_concerns_id'))?></td>
			<td><span class="big"><?php echo $element->specific_concerns ? $element->specific_concerns->name : 'None'?></span></td>
		</tr>
	</tbody>
</table>
