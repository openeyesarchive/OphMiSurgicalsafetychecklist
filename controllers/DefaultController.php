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

	public function actionCreate()
	{
		foreach ($_POST as $key => $value) {
			if (preg_match('/^(Element_.*)_active$/',$key,$m)) {
				if (!$value) {
					unset($_POST[$m[1]]);
				}
			}
		}

		return parent::actionCreate();
	}

	public function actionUpdate($id)
	{
		foreach ($_POST as $key => $value) {
			if (preg_match('/^(Element_.*)_active$/',$key,$m)) {
				if (!$value) {
					$model = $m[1];
					if (!$model::model()->find('event_id=?',array($id))) {
						unset($_POST[$m[1]]);
					}
				}
			}
		}

		return parent::actionUpdate($id);
	}
}
