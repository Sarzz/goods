<?php
/* @var $this InformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informations',
);


?>

<h1>Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
)); ?>
