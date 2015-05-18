<?php
/* @var $this InformationController */
/* @var $model Information */

$this->breadcrumbs=array(
	'Informations'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	
	array('label'=>'View Information', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Information <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>