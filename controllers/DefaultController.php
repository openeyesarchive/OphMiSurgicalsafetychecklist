<?php

class DefaultController extends BaseEventTypeController 
{
	public function elementActive($element)
	{
		if (!empty($_POST)) {
			return (boolean)@$_POST[get_class($element).'_active'];
		}

		if (!$this->event) {
			$element_type = ElementType::model()->find(array('condition'=>'event_type_id=?','params'=>array($element->elementType->event_type_id),'order'=>'display_order'));
			return $element->elementType->id == $element_type->id;
		}

		return ($element->elementType->id == $this->getNextElementTypeID($element));
	}

	public function getNextElementTypeID($element) {
		foreach (ElementType::model()->findAll(array('condition'=>'event_type_id=?','params'=>array($element->elementType->event_type_id),'order'=>'display_order')) as $element_type) {
			$class = $element_type->class_name;

			if (!$class::model()->find('event_id=?',array($this->event->id))) {
				return $element_type->id;
			}
		}
	}

	public function previousElementsExist($element) {
		foreach (ElementType::model()->findAll('event_type_id=? and display_order <?',array($element->elementType->event_type->id,$element->elementType->display_order)) as $element_type) {
			$class = $element_type->class_name;

			if (!$class::model()->find('event_id=?',array($element->event_id))) {
				return false;
			}
		}
	}
}
