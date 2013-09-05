<?php

class DefaultController extends BaseEventTypeController 
{
	public function elementActive($element)
	{
		if (!empty($_POST)) {
			return (boolean)@$_POST[get_class($element).'_active'];
		}

		if (!$element->id) {
			return ($element->elementType->class_name == 'Element_OphMiSurgicalsafetychecklist_SignIn');
		}

		if (!$element->event->hasElement(get_class($element).'_active')) {
			return true;
		}

		return false;
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
}
