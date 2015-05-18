<?php
/* @var $this InformationController */
/* @var $model Information */

$this->breadcrumbs=array(
	'Informations'=>array('index'),
	'Create',
);


?>

<h1>Create Information</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>